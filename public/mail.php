<?php 
header("Content-Type: text/html; charset=UTF-8");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Nimi: $name \nSähköpostiosoite: $email \nViesti: $message";
$recipient = "jon.nesten@gmail.com";
$subject = "Yhteydenottolomake";
$mailheader = "From: dohzxqcn@karhunparrat.fi \r\n";
if (mail($recipient, $subject, $formcontent, $mailheader)) {
        echo json_encode(['result' => true]);
    }else {
        echo json_encode(['result' => false]);
 }
//mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
//echo utf8_encode("Kiitos viestistäsi, palaamme sinulle pikimmiten! \nTämän ikkunan voi nyt sulkea!");
?>