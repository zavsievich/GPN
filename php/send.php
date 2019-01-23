<?php

$name = $_POST['name'];
$number = $_POST['number'];
$model = $_POST['model'];
$problem = $_POST['problem'];

$name = htmlspecialchars($name);
$number = htmlspecialchars($number);
$model = htmlspecialchars($model);
$problem = htmlspecialchars($problem);

$name = urldecode($name);
$number = urldecode($number);
$model = urldecode($model);
$problem = urldecode($problem);

$name = trim($name);
$number = trim($number);
$model = trim($model);
$problem = trim($problem);

if(mail("gpnserv@gmail.com", "Заявка с сайта", "Имя:".$name.". "Модель телефона:".$model.". "Проблема:".$problem.". Номер телефона: ".$number \r\n"));

?>