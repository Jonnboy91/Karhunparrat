<?php 
header("Content-Type: text/html; charset=UTF-8");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Nimi: $name \nS�hk�postiosoite: $email \nViesti: $message";
$recipient = "jon.nesten@gmail.com";
$subject = "Yhteydenottolomake";
$mailheader = "From: dohzxqcn@karhunparrat.fi \r\n";
if (mail($recipient, $subject, $formcontent, $mailheader)) {
        echo json_encode(['result' => true]);
    }else {
        echo json_encode(['result' => false]);
 }
//mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
//echo utf8_encode("Kiitos viestist�si, palaamme sinulle pikimmiten! \nT�m�n ikkunan voi nyt sulkea!");
?>