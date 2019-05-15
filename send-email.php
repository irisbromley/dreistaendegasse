<?php
$anrede = $_POST['anrede'];
$titel = $_POST['titel'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$body="_________________________________ \n Anfrage für 3STG: \n Absender: $anrede $titel $name \n E-Mail: $email \n Telefonnummer: $phone \n Nachricht: $message ";
$to = "iris.pfeffer@gmx.at";
$subject = "Anfrage für 3STG";
if($name != "" && $email != ""){  
    echo mail($to, $subject, $body);
} else {   
    echo "false";
}
