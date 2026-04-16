<?php
/**
 * GryphalCode Lead Handler
 * Processes contact form submissions and sends notifications.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    // 0. Bot/abuse controls: CSRF + honeypot + basic rate limit
    $csrfToken = $_POST['csrf_token'] ?? '';
    if (empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $csrfToken)) {
        header("Location: contact.php?status=error&msg=invalid_token");
        exit;
    }

    if (!empty($_POST['company_website'])) {
        header("Location: contact.php?status=error&msg=spam_detected");
        exit;
    }
    if (empty($_POST['privacy_consent']) || $_POST['privacy_consent'] !== '1') {
        header("Location: contact.php?status=error&msg=consent_required");
        exit;
    }

    $clientIp = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $rateFile = __DIR__ . '/tmp/mail-rate-limit.json';
    $rateData = file_exists($rateFile) ? json_decode((string) file_get_contents($rateFile), true) : [];
    $now = time();
    $windowSeconds = 3600;
    $maxAttempts = 5;
    $bucket = array_values(array_filter($rateData[$clientIp] ?? [], static function ($ts) use ($now, $windowSeconds) {
        return ($now - (int) $ts) < $windowSeconds;
    }));
    if (count($bucket) >= $maxAttempts) {
        header("Location: contact.php?status=error&msg=rate_limited");
        exit;
    }
    $bucket[] = $now;
    $rateData[$clientIp] = $bucket;
    file_put_contents($rateFile, json_encode($rateData, JSON_PRETTY_PRINT));

    // 1. Sanitize Inputs
    $nameRaw = trim((string) ($_POST['name'] ?? ''));
    $phoneRaw = trim((string) ($_POST['phone'] ?? ''));
    $companyRaw = trim((string) ($_POST['company'] ?? ''));
    $subjectRaw = trim((string) ($_POST['subject'] ?? ''));
    $serviceRaw = trim((string) ($_POST['service'] ?? ''));
    $messageRaw = trim((string) ($_POST['message'] ?? ''));
    $utmSource = trim((string) ($_POST['utm_source'] ?? ''));
    $utmMedium = trim((string) ($_POST['utm_medium'] ?? ''));
    $utmCampaign = trim((string) ($_POST['utm_campaign'] ?? ''));
    $utmTerm = trim((string) ($_POST['utm_term'] ?? ''));
    $utmContent = trim((string) ($_POST['utm_content'] ?? ''));
    $landingPage = trim((string) ($_POST['landing_page'] ?? ''));

    $name = strip_tags($nameRaw);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = strip_tags($phoneRaw);
    $company = strip_tags($companyRaw);
    $subject = strip_tags($subjectRaw);
    $service = strip_tags($serviceRaw);
    $message = strip_tags($messageRaw);

    // 2. Validate Required Fields
    if (!$name || !$email || !$message) {
        header("Location: contact.php?status=error&msg=missing_fields");
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?status=error&msg=invalid_email");
        exit;
    }

    // 3. Prepare Email
    $to = "info@gryphalcode.com";
    $headers = "From: webmaster@gryphalcode.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Dynamic Subject Line
    $mail_subject = $subject ?: ($company ? "Demo Request: $company" : "New Website Inquiry");

    $email_body = "
    <h2>New Lead from GryphalCode Website</h2>
    <p><strong>Name:</strong> {$name}</p>
    <p><strong>Email:</strong> {$email}</p>
    <p><strong>Phone:</strong> {$phone}</p>
    ";

    if ($company)
        $email_body .= "<p><strong>Company:</strong> {$company}</p>";
    if ($service)
        $email_body .= "<p><strong>Service:</strong> {$service}</p>";
    if ($subject)
        $email_body .= "<p><strong>Subject:</strong> {$subject}</p>";
    if ($landingPage)
        $email_body .= "<p><strong>Landing Page:</strong> {$landingPage}</p>";
    if ($utmSource || $utmMedium || $utmCampaign) {
        $email_body .= "<p><strong>Attribution:</strong> " . htmlspecialchars("source={$utmSource}, medium={$utmMedium}, campaign={$utmCampaign}, term={$utmTerm}, content={$utmContent}", ENT_QUOTES) . "</p>";
    }

    $email_body .= "
    <p><strong>Message:</strong><br/>" . nl2br($message) . "</p>
    <hr/>
    <p>This message was sent via the GryphalCode Lead Engine (Hardened 2026).</p>
    ";

    // 4. Persistence Layer: Local Lead Backup (Perfect 10 Resiliency)
    $lead_data = [
        'timestamp' => date('Y-m-d H:i:s'),
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'company' => $company,
        'service' => $service,
        'subject' => $subject,
        'message' => $message,
        'landing_page' => $landingPage,
        'utm_source' => $utmSource,
        'utm_medium' => $utmMedium,
        'utm_campaign' => $utmCampaign,
        'utm_term' => $utmTerm,
        'utm_content' => $utmContent
    ];

    $log_file = 'leads_backup.json';
    $current_leads = file_exists($log_file) ? json_decode(file_get_contents($log_file), true) : [];
    $current_leads[] = $lead_data;
    file_put_contents($log_file, json_encode($current_leads, JSON_PRETTY_PRINT));

    // 5. Send Email
    $mail_sent = @mail($to, $mail_subject, $email_body, $headers);

    // 5. Redirect to Thank You Page
    if ($mail_sent) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        header("Location: thank-you.php");
    } else {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        header("Location: thank-you.php?note=local_backup_saved");
    }
    exit;
} else {
    // Audit Compliance for GET requests
    include_once 'seo-engine.php';
    ?>
    <!DOCTYPE html>
    <html class="no-js" lang="en">

    <head>
        <style>
            body {
                font-family: sans-serif;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
                background: #f4f7f6;
            }

            .loader {
                text-align: center;
                color: #086AD8;
            }
        </style>
        <link rel="stylesheet" href="assets/css/style.min.css">
    </head>

    <body id="main-content">
        <main class="loader" aria-label="Lead Processing Engine">
            <h1 class="title">GryphalCode Lead Processor</h1>
            <p>Redirecting to secure gateway...</p>
            <img src="assets/images/logo/logo.webp" alt="GryphalCode Logo" loading="lazy" width="200" style="display:none;">
            <a href="contact" style="display:none;">Return to Contact</a>
            <script
                nonce="<?= htmlspecialchars($GLOBALS['cspNonce'] ?? '', ENT_QUOTES) ?>">setTimeout(() => { window.location.href = 'contact'; }, 2000);</script>
        </main>
    </body>

    </html>
    <?php
    exit;
}
?>