<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail
{

    public function verifyMail($recipient_mail,$recipient_name,$token)
    {
        // Load Composer's autoloader
        require '../vendor/autoload.php';

        try {

            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);

            //Server settings
            $mail->SMTPDebug = false;// Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';// Set the SMTP server to send through
            $mail->SMTPAuth   = true;// Enable SMTP authentication
            $mail->Username   = 'kyawzinaung.186380@gmail.com';// SMTP username
            $mail->Password   = 'enuthhmasxjhmiqw';// SMTP password
            $mail->SMTPSecure = 'tls';// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;// TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('test.ivhub@gmail.com', 'UniversityEvents');  
            $mail->addAddress($recipient_mail,$recipient_name);     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Verify Mail';
            $mail->Body    = "<b> Dear customer,\n\nThank you for registering with us.<a href='$token' target='_blank'> Please click on the link below to verify your registration </a>If you have any questions, feel free to contact us.\n\nBest regards,\nITVisionHub</b>.";

            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            return true;
            // echo 'Message has been sent';
        } catch (Exception $e) {
            error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
            return false; // Failure
        }

    }

}




?>