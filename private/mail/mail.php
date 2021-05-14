<?php

use function PHPSTORM_META\elementType;

$mailadres = "florian.tjeertes@gmail.com";
$clientAdres =$_POST["ca"];
$clientName =$_POST["cn"];

$message = '<html><body>';
$message .='<header> </header>';
$message .='<h1>hey dit is een email. VET! </h1>';
$message .='</footer>';

$headers = 'From: '.$clientAdres . "\r\n" .
    'Reply-To: '. $clientAdres . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if( mail($mailadres, $clientAdres, $message, $headers)){
    echo "mail send";

}
else{
    echo "mail not send";
}
