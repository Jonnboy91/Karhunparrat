<?php 
header("Content-Type: text/html; charset=UTF-8");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Nimi: $name \nS�hk�postiosoite: $email \nViesti: $message";   // E-mail content (name - email - message)
$recipient = "";  // Your e-mail
$subject = "Yhteydenottolomake";    // Mail subject
$mailheader = "From: domain@domain \r\n";    // Mail header (From who)
if($name == "") {
    echo json_encode(['result' => false]);
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['result' => false]);
}
else if($message == "") {
    echo json_encode(['result' => false]);
}
else if (mail($recipient, $subject, $formcontent, $mailheader)) {
    echo json_encode(['result' => true]);
}
else {
    echo json_encode(['result' => false]);
}
