<?php

/*
$recepient = "gpnserv@gmail.com";
*/
$recepient = "avszak@gmail.com";
$sitename = "GPN service";

$name = $_POST["name"];
$number = $_POST["number"];
$model = $_POST["model"];
$problem = $_POST["problem"];

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

$message = "Имя: $name \nТелефон: $phone \nМодель: $model\nПроблема: $problem";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");