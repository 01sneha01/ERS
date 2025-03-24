<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function sendConfirmationEmail($toEmail, $name) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com'; // Your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'snehastha.4.28@gmail.com'; // Your email
        $mail->Password = 'ixox aobg rezn ecpc'; // Your email password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->SMTPDebug = 2;

        $mail->setFrom('snehastha.4.28@gmail.com', 'Prime Event');
        $mail->addAddress($toEmail, $name);

        $mail->Subject = 'Event Registration Confirmation';
        $mail->Body = "Dear $name,\n\nThank you for registering! We look forward to seeing you at the event.\n\nBest Regards,\nPrime Event Team";

        $mail->send();
    } catch (Exception $e) {
        error_log("Email sending failed: " . $mail->ErrorInfo);
    }
}
?>
