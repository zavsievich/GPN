
<?php

$name = $_POST["name"];
$number = $_POST["number"];
$token = "678435905:AAGInoV8x25Cmm3Pf0Io7OqhK1OIDKU87JU";
$chat_id  = "-372349068";
$arr = array(
    'Имя: ' => $name,
    'Телефон: ' => $number
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  
    echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
      return true;
  } else {
    echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
  }
  } else {
    echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
  }
  } else {
  header ("Location: /");
  }
   
  ?>