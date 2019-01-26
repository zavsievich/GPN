<?php

/*
$recepient = "gpnserv@gmail.com";
*/
$recepient = "avszak@gmail.com";
$sitename = "GPN service";

$name = $_POST["name"];
$number = $_POST["number"];

$name = htmlspecialchars($name);
$number = htmlspecialchars($number);

$name = urldecode($name);
$number = urldecode($number);


$name = trim($name);
$number = trim($number);

$message = "Имя: $name \nТелефон: $phone";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");