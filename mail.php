<?php
/**
 * Simple PHP mail script using the built-in mail() function.
 * Sends a well-structured HTML email with header, body, and footer.
 */

// --- Configuration ----------------------------------------------------------
$senderEmail = 'hr@mqlus.in';
// App password is not used by mail(); kept for reference only.
$appPassword = 'cdtwyyvtoigsxees';

// Recipient – change this to the actual destination address.
$to = 'pp8754352@gmail.com';

// Subject of the email.
$subject = 'Test Email from PHP mail()';

// --- Build the HTML message body --------------------------------------------
$htmlMessage = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test Email</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .header { border-bottom: 2px solid #4CAF50; padding-bottom: 10px; }
        .header h1 { color: #333; }
        .body { padding: 20px 0; line-height: 1.6; color: #555; }
        .footer { border-top: 1px solid #ddd; padding-top: 15px; font-size: 12px; color: #999; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📧 Test Email</h1>
        </div>
        <div class="body">
            <p>Hello,</p>
            <p>This is a test email sent via PHP's <code>mail()</code> function.</p>
            <p>It demonstrates a well‑structured message with HTML formatting, including a header, body, and footer.</p>
            <p>If you received this, the script is working correctly.</p>
        </div>
        <div class="footer">
            &copy; 2026 Your Company &bull; Sent from PHP
        </div>
    </div>
</body>
</html>
HTML;

// --- Prepare email headers --------------------------------------------------
// Sender and reply-to headers
$headers = "From: $senderEmail\r\n";
$headers .= "Reply-To: $senderEmail\r\n";

// MIME headers for HTML email
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Optional: additional headers (e.g., X-Mailer)
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

// --- Send the email ---------------------------------------------------------
if (mail($to, $subject, $htmlMessage, $headers)) {
    echo "✅ Email sent successfully to $to";
} else {
    echo "❌ Failed to send email. Check your server's mail configuration.";
}
?>