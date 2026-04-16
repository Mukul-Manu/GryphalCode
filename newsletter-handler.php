<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    $csrfToken = (string) ($_POST['csrf_token'] ?? '');
    if (empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $csrfToken)) {
        echo json_encode(['success' => false, 'message' => 'Invalid security token. Please refresh and try again.']);
        exit;
    }
    if (!empty($_POST['website_url'])) {
        echo json_encode(['success' => false, 'message' => 'Invalid request.']);
        exit;
    }
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $clientIp = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $rateFile = __DIR__ . '/tmp/newsletter-rate-limit.json';
    $rateData = file_exists($rateFile) ? json_decode((string) file_get_contents($rateFile), true) : [];
    $now = time();
    $windowSeconds = 3600;
    $maxAttempts = 8;
    $bucket = array_values(array_filter($rateData[$clientIp] ?? [], static function ($ts) use ($now, $windowSeconds) {
        return ($now - (int) $ts) < $windowSeconds;
    }));
    if (count($bucket) >= $maxAttempts) {
        echo json_encode(['success' => false, 'message' => 'Too many attempts. Please try again later.']);
        exit;
    }
    $bucket[] = $now;
    $rateData[$clientIp] = $bucket;
    file_put_contents($rateFile, json_encode($rateData, JSON_PRETTY_PRINT));

    if (!$email) {
        echo json_encode(['success' => false, 'message' => 'Please provide a valid business email.']);
        exit;
    }

    // In a real implementation, you would save this to a database or sync with an ESP like Mailchimp/SendGrid
    // For now, we'll log it and simulate success.
    $logFile = __DIR__ . '/assets/leads/newsletter_subs.log';
    if (!is_dir(__DIR__ . '/assets/leads')) {
        mkdir(__DIR__ . '/assets/leads', 0755, true);
    }

    $entry = date('Y-m-d H:i:s')
        . " - " . $email
        . " - IP: " . $clientIp
        . " - UTM: source=" . ($_POST['utm_source'] ?? '')
        . ",medium=" . ($_POST['utm_medium'] ?? '')
        . ",campaign=" . ($_POST['utm_campaign'] ?? '')
        . ",term=" . ($_POST['utm_term'] ?? '')
        . ",content=" . ($_POST['utm_content'] ?? '')
        . " - Referer: " . ($_SERVER['HTTP_REFERER'] ?? 'Unknown') . "\n";
    file_put_contents($logFile, $entry, FILE_APPEND);

    echo json_encode(['success' => true, 'message' => 'Success! Welcome to the GryphalCode community.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
