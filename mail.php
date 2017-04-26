<?php
if(isset($_POST['phone'])) {$phone=$_POST['phone'];}
if(isset($_POST['name'])) {$name=$_POST['name'];}
if(isset($_POST['email'])) {$email=$_POST['email'];}
if(isset($_POST['topic'])) {$topic=$_POST['topic'];}

$date=date('d.m G-i');
$to = "spakamin@yandex.ru";

$send_yes="Заявка успешно отправлена!"; 
$send_no="Ошибка! Заявка не отправлена! \n Попробуйте позже."; 

$message = "Тема: ".$topic."<br>";
$message .="Имя: ".$name."<br>";
$message .= "Телефон: ".$phone."<br>";
$message .= "E-mail: ".$email."<br>";
$message .="Дата: ".$date;

$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

if(mail($to,$topic,$message,$headers)) { echo nl2br($send_yes); } else { echo nl2br($send_no); } ?>