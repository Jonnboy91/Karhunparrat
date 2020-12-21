<?php 
header('Content-Type: text/html; charset=ISO-8859-1');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Nimi: $name \n Sähköpostiosoite: $email \n Viesti: $message";
$recipient = "karhunparrat@gmail.com";
$subject = "Yhteydenottolomake";
$mailheader = "From: dohzxqcn@karhunparrat.fi \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Kiitos viestistäsi, palaamme sinulle pikimmiten";
?>