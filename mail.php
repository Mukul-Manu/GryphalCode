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

    $email_body = "
    <h2>New Lead from GryphalCode Website</h2>
    <p><strong>Name:</strong> {$name}</p>
    <p><strong>Email:</strong> {$email}</p>
    <p><strong>Phone:</strong> {$phone}</p>
    <p><strong>Service:</strong> {$service}</p>
    <p><strong>Subject:</strong> {$subject}</p>
    <p><strong>Message:</strong><br/>".nl2br($message)."</p>
    <hr/>
    <p>This message was sent via the GryphalCode Lead Engine.</p>
    ";

    // 4. Persistence Layer: Local Lead Backup (Perfect 10 Resiliency)
    $lead_data = [
        'timestamp' => date('Y-m-d H:i:s'),
        'name'      => $name,
        'email'     => $email,
        'phone'     => $phone,
        'service'   => $service,
        'subject'   => $subject,
        'message'   => $message
    ];
    $log_file = 'leads_backup.json';
    $current_leads = file_exists($log_file) ? json_decode(file_get_contents($log_file), true) : [];
    $current_leads[] = $lead_data;
    file_put_contents($log_file, json_encode($current_leads, JSON_PRETTY_PRINT));

    // 5. Send Email (Note: Requirements for actual delivery depend on host SMTP config)
    $mail_sent = @mail($to, "New Lead: $subject", $email_body, $headers);

    // 5. Redirect to Thank You Page
    if ($mail_sent) {
        header("Location: thank-you.php");
    } else {
        // Fallback for local/XAMPP environments where mail() isn't configured
        header("Location: thank-you.php?note=mail_delivery_failed_locally");
    }
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>
