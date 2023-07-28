<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader
require 'mailer/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();

$_SESSION["verficationCode"] = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

$_SESSION["forgetMail"] = $_POST['forgetMail'];

$mailError = '';

if(isset($_POST['forgetBtn'])){

    $forgetMail = $_POST['forgetMail'];

    //Server settings
    $mail->SMTPDebug = 0;                     
    $mail->isSMTP();        
    $mail->Host = 'smtp.gmail.com';                                                
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'omaraboelnaga131@gmail.com';                     
    $mail->Password   = 'fikzyahfovqqqnov';                              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                   

    //Content format
    $mail->isHTML(true);        //Set email format to HTML
    $mail->CharSet = "UTF-8"; 

}

    
?>

