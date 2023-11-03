<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer\src\PHPMailer.php';
require 'PHPMailer\src\Exception.php';
require 'PHPMailer\src\SMTP.php';
$mail = new PHPmailer(true);
function mailsent(){
    if(!isset($_POST["sendMail"])){
        global $mail;
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 1;
        $mail->Username = "abhijeet.b@somaiya.edu";
        $mail->Password = "xxxace";

        $mail->SMTPSecure="ssl";
        $mail->Port=465;

        $mail->setFrom("abhijeet.b@somaiya.edu");
        $mail->addAddress($_POST["emailto"]);
        $mail->Subject="Embark on a Galactic Adventure: Discover Our Space Travel Newsletter";
        $mess = "Hello there!<br>
        🌌Thank you for subscribing to our Space Travel Newsletter. We're thrilled to have you on board.<br>
        🌠In our newsletters, you'll receive the latest updates, exclusive offers, and exciting space travel opportunities.<br>
        🛰️If you ever wish to unsubscribe from our newsletter, you can do so by clicking on the provided unsubscribe link.<br>
        🚀For any questions or comments, please don't hesitate to contact us.<br>
        Sincerely, AstroVoyager.";
        $mail->Body = $mess;
        $mail->isHTML(true);
        $mail->send();
    }
}
try{
    mailsent();
    echo "Mail has been sent successfully!";
}catch(Exception $e){
    echo "Mail could not sent. Mailer Error: {$mail->ErrorInfo}";
}
?>