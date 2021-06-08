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

     $prepared  = array(
     array( 'querry'=> "SELECT products.id, products.name , products.text , 
     product_atributes.height,product_atributes.width, 
     product_atributes.depth,product_atributes.price, 
     product_atributes.amount,product_atributes.weight,
     product_atributes.tax,
     images.imageHIGHres,images.imageLOWres,
     authors.author
     from products 
     Inner JOIN product_atributes on products.atributes=product_atributes.id 
     Inner JOIN images on products.image=images.id
     Inner JOIN authors on products.author=authors.id
     ",
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