<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);

//post
$webPage = 'ChistoBistro';
$name = $_POST['name'];
$service = $_POST['service'];
$phone = $_POST['phone'];

$arr = [
    'Новая заявка с сайта: ' => $webPage,
    'Имя:' => $name,
    'Тип услуги:' => $service,
    'Номер телефона:' => $phone,
];

$subject = 'Заявка с сайта';
$message = '';

foreach ($arr as $key => $value) {
    $message .= "<br>" . $key ."</br>" . $value . "<br>";
}

$mail->isSMTP();                                           
$mail->Host       = 'ssl://smtp.mail.ru';                     
$mail->SMTPAuth   = true;                                  
$mail->Username   = 'asilbro1@mail.ru';                    
$mail->Password   = 'htNEuJRzGHjybdExDp6Y';                              
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
$mail->Port       = 465;                                    
$mail->CharSet    = 'UTF-8';
$mail->setFrom('asilbro1@mail.ru');
$mail->addAddress('yanoexample@mail.ru');    
$mail->isHTML(true);                                  
$mail->Subject = $subject;
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
try {
    $mail->Send();
    echo 'Успешно!';
} catch (Exception $e) {
    echo 'Попрубуйте позже!';
}





