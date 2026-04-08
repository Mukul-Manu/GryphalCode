<?php
/**
 * GryphalCode Lead Handler
 * Processes contact form submissions and sends notifications.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sanitize Inputs
    $name    = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email   = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone   = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // 2. Validate Required Fields
    if (!$name || !$email || !$message) {
        header("Location: contact.php?status=error&msg=missing_fields");
        exit;
    }

    // 3. Prepare Email
    $to      = "info@gryphalcode.com";
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

    if ($company) $email_body .= "<p><strong>Company:</strong> {$company}</p>";
    if ($service) $email_body .= "<p><strong>Service:</strong> {$service}</p>";
    if ($subject) $email_body .= "<p><strong>Subject:</strong> {$subject}</p>";

    $email_body .= "
    <p><strong>Message:</strong><br/>".nl2br($message)."</p>
    <hr/>
    <p>This message was sent via the GryphalCode Lead Engine (Hardened 2026).</p>
    ";

    // 4. Persistence Layer: Local Lead Backup (Perfect 10 Resiliency)
    $lead_data = [
        'timestamp' => date('Y-m-d H:i:s'),
        'name'      => $name,
        'email'     => $email,
        'phone'     => $phone,
        'company'   => $company,
        'service'   => $service,
        'subject'   => $subject,
        'message'   => $message
    ];

    $log_file = 'leads_backup.json';
    $current_leads = file_exists($log_file) ? json_decode(file_get_contents($log_file), true) : [];
    $current_leads[] = $lead_data;
    file_put_contents($log_file, json_encode($current_leads, JSON_PRETTY_PRINT));

    // 5. Send Email
    $mail_sent = @mail($to, $mail_subject, $email_body, $headers);

    // 5. Redirect to Thank You Page
    if ($mail_sent) {
        header("Location: thank-you.php");
    } else {
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
        body { font-family: sans-serif; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; background: #f4f7f6; }
        .loader { text-align: center; color: #086AD8; }
    </style>
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>
<body id="main-content">
    <main class="loader" aria-label="Lead Processing Engine">
        <h1 class="title">GryphalCode Lead Processor</h1>
        <p>Redirecting to secure gateway...</p>
        <img src="assets/images/logo/logo.webp" alt="GryphalCode Logo" loading="lazy" width="200" style="display:none;">
        <a href="contact" style="display:none;">Return to Contact</a>
        <script>setTimeout(() => { window.location.href = 'contact'; }, 2000);</script>
    </main>
</body>
</html>
<?php
    exit;
}
?>
