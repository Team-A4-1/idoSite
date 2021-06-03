<?php

$ini = parse_ini_file('../../settings.ini');

header("Content-Type: application/json; charset=UTF-8");

//email 
$mailadres=$ini['mailadressCeller'];
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



$clientMessage = str_replace($htmlSearch,$htmlreplace,$clientMessage);

//test
$clientAdres = "floof.f@f.com";
$clientName="henkie";
//

$message = 
'<html>
   <body>
    <header> 
    </header>
        <h1>hey dit is een email.'.$clientMessage.'VET! </h1>
        <p></p>
    <footer>
    </footer>
    </body>
</html>';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = 'From: '.$clientAdres;
// $headers .= 'Reply-To:'. $clientAdres;
// $headers .= 'X-Mailer:'. phpversion();



if( mail($mailadres,"php mail test" ,    $message, implode("\r\n", $headers))){
ReturnJason(true,'succes');
}
else{
    ReturnJason(false,'failure');
  }


function ReturnJason(bool $test,string $message){
    $myObj = array('status' =>$test,'messag'=>$message);

$myJSON = json_encode($myObj);

echo $myJSON;
};