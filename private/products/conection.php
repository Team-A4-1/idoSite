<?php
namespace products;

use Mysqli;
class conection {



  public  function connect( $inputVal ,$query =0){
 $ini = parse_ini_file('../../settings.ini');
 $servername =    $ini['server_name2'];
 $db_username   =    $ini['db_user2'];  
 $db_password   =    $ini['db_password2'];
 $dbname     =    $ini['db_name2']; 

$statementExtra = null;

 $id = $inputVal;
 $name = $inputVal;

 $conn = new mysqli($servername, $db_username, $db_password, $dbname);


 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

    static $prepared  = array(
     array( 'querry'=> "SELECT *
   from products 
   Inner JOIN product_atributes on products.atributes=product_atributes.id 
   Inner JOIN images on products.image=images.id",
   'search'=>"WHERE products.id = ? OR products.name = ?",
   'param'=>"is")
   
  );
   
if($inputVal!=null){
  $statementExtra =" ".$prepared[0]['search']; 
}

$stmt = $conn->prepare($prepared[0]['querry'].$statementExtra);

if($inputVal!=null){

 $stmt->bind_param($prepared[0]['param'], $id, $name);
}

 $stmt->execute();
 $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

if($result !=null){
   
  $result["status"]= 'succes';

}
else{
  $result["status"]='failure';

}
$jason = json_encode($result);
 return $jason;
 $stmt->close();
 $conn->close();
}

}

?>