<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["sender_email"], $_POST["sender_password"], $_POST["subject"], $_POST["message"], $_POST["recipient_emails"])) {
    $sender_email = $_POST["sender_email"];
    $sender_password = $_POST["sender_password"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $recipient_emails = explode(',', $_POST["recipient_emails"]);

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'mail.swechaap.org'; // Update with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = $sender_email;
        $mail->Password = $sender_password;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($sender_email);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Handle attachments
        if(isset($_FILES['attachment']) && $_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
            $attachment_path = $_FILES['attachment']['tmp_name'];
            $attachment_name = $_FILES['attachment']['name'];
            $mail->addAttachment($attachment_path, $attachment_name);
        }

        foreach ($recipient_emails as $recipient) {
            $recipient = trim($recipient);
            $mail->clearAddresses();
            $mail->addAddress($recipient);
            $mail->send();
        }

        echo '<script>alert("Emails sent successfully."); window.location.href = "/home/event/email.html";</script>';
    } catch (Exception $e) {
        echo '<script>alert("Error occurred while sending emails: ' . $mail->ErrorInfo . '"); window.location.href = "/home/event/email.html";</script>';
    }
} else {
    echo '<script>alert("Please fill all required fields."); window.location.href = "/home/event/email.html";</script>';
}
?>
