<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require("vendor/autoload.php");

 function sendMail($subject, $body, $email, $name){

    
    //Configuracion Inicial de correo 
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'e53de227fbcbd7';
    $phpmailer->Password = '8e237bb3169953';

    //añadiendo destinatario 

    $phpmailer->setFrom('jesusdavidmv20@gmail.com', 'jesusm199920');
    $phpmailer->addAddress($email , $name );


    //Difiniendo el contenido de email

    $phpmailer->isHTML(true);                                  //Set ephpmailer format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;
    $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $phpmailer->send();

 }


?>