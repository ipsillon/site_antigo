<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('vendor/autoload.php');

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug   = 0;                     // Enable verbose debug output
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host        = 'smtp.ipsillon.cc';    // Specify main and backup SMTP servers
    $mail->SMTPAuth    = true;                  // Enable SMTP authentication
    $mail->Username    = 'contato@ipsillon.cc'; // SMTP username
    $mail->Password    = 'hY4i$c92b';           // SMTP password
    $mail->Port        = 587;                   // TCP port to connect to
    $mail->SMTPSecure  = false;                 // Define se é utilizado SSL/TLS - Mantenha o valor "false"
    $mail->SMTPAutoTLS = false;                 // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
                                        
    //Recipients
    $mail->setFrom('contato@ipsillon.cc', 'Contato');
    $mail->addAddress('contato@ipsillon.cc', 'Contato');     // Add a recipient
    $mail->addAddress('fernando@ipsillon.cc', 'Contato');     // Add a recipient
    $mail->addAddress('leandro@ipsillon.cc', 'Contato');     // Add a recipient
    $mail->addAddress('gustavo@ipsillon.cc', 'Contato');     // Add a recipient
    $mail->addAddress('alberto@ipsillon.cc', 'Contato');     // Add a recipient
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Quero saber mais sobre';
    $mail->Body    = implode('<br>', $_POST);
    
   
    $mail->send();

    echo json_encode(['response' => 'success']);

} catch (Exception $e) {
    echo json_encode(['response' => 'fail']);
}