<?php

require_once "SendMailSmtpClass.php";


$tel = $_POST['tel'];
$email = $_POST['email'];


$from = array(
    $_POST['tel'],
    $_POST['email']
);


$mailSMTP = new SendMailSmtpClass('belinsky.dev@gmail.com', "N546823791n",
    'ssl://smtp.gmail.com', 465, "UTF-8");

$to = 'belinsky.dev@gmail.com';

$url = $_POST['url'];

$sbj = 'REQUEST FORM: ' . $url;

$message = "<h3>Заявка со страницы:" . $url . "</h3><ul><li>Телефон: " . $tel . "</li>  <li>Email: " . $email . "</li> </ul>";

$result = $mailSMTP->send($to, $sbj, $message, $from);


if($result === true){
    header('Location: ' . $_POST['link']);
}else {
    echo "Error: " . $result;

}
