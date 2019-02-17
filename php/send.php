<?php
$name = $_POST["name"];
$number = $_POST["number"];
$botToken = "678435905:AAGInoV8x25Cmm3Pf0Io7OqhK1OIDKU87JU";
$website="https://api.telegram.org/bot".$botToken;
$chatID="-1001292594196";  //Receiver Chat Id 
$params= array(
    'chat_id'=>$chatID,
    'text'=>"$name $number",
);
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Спасибо</title>
</head>
<body>
<h1>Спасибо! Заявка отправлена. Наш менеджер свяжется с вами.</h1>
</body>
</html>
/*$arr = array(
    'Имя: ' => $name,
    'Телефон: ' => $number
);
foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
}
$ch = curl_init("");
curl_setops($ch,CURLOPT_FILE,)
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
  
    echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
      return true;
  } 
   */
  ?>