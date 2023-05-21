<?php
//Сбор данных из полей формы. 
$name = $_POST['name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['phone']; // Берём данные из input c атрибутом name="phone"
$text =$_POST['text'];
$file =$_POST['file'];
 

$token = "1405413078:AAESJpzt5jrSfoQz22xTNJpIks0SPs7ZTPE"; // Тут пишем токен
$chat_id = "-430758824"; // Тут пишем ID группы, куда будут отправляться сообщения
$sitename = "https://artemshaer.ru"; //Указываем название сайта

$arr = array(

  'Заказ с сайта: ' => $sitename,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Text: ' => $text,
  'file: ' => $file,
 
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>