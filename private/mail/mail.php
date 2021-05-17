<?php

use function PHPSTORM_META\elementType;

$mailadres = "florian.tjeertes@gmail.com";

if (!filter_var($_POST["ca"], FILTER_VALIDATE_EMAIL)) {
    ReturnJason(false,"Invalid email format");
    
  }
  else{
$clientAdres =$_POST["ca"];
  }
$clientName =$_POST["cn"];
$clientMessage =$_POST["cn"];

$htmlSearch = array('<','>');
$htmlreplace = array('&lt;','&gt;');


$clientMessage = str_replace($htmlSearch,$htmlreplace,$clientMessage)




$message = 
'<html>
   <body>
    <header> 
    </header>
        <h1>hey dit is een email. VET! </h1>
        <p>'.$clientMessage.'</p>
    <footer>
    </footer>
    </body>
</html>';



$headers = array(
    'From' => $clientAdres,
    'Reply-To' => $clientAdres,
    'X-Mailer' => 'PHP/' . phpversion(),
    'MIME-Version' => '1.0',
    'Content-type'=> 'text/html; charset=iso-8859-1',

);



if( mail($mailadres, $clientAdres, $message, $headers)){
ReturnJason(true,'succes');
}
else{
    ReturnJason(false,'failure');
}
function ReturnJason(bool $test,string $message){
$myObj->status = $test;
$myObj->message =$message;
header("Content-Type: application/json; charset=UTF-8");
$myJSON = json_encode($myObj);
echo $myJSON;
};