<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('vendor/autoload.php');

$mail = new PHPMailer(true);
echo "<pre>";
print_r($_POST);


try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.ipsillon.cc';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'contato@ipsillon.cc';                     // SMTP username
    $mail->Password   = 'hY4i$c92b';                               // SMTP password
    $mail->Port       = 587;
    $mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
    $mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
                                        // TCP port to connect to

    
    //Recipients
    $mail->setFrom('gugaferri@gmail.com', 'Mailer');
    $mail->addAddress('gugaferri@gmail.com', 'Joe User');     // Add a recipient
    
    // Attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}