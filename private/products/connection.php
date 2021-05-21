<?php
namespace products;

use Mysqli;
class conection {


    function connect(){
 $ini = parse_ini_file('../../settings.ini');
 $servername =    $ini['server_name2'];
 $db_username   =    $ini['db_user2'];  
 $db_password   =    $ini['db_password2'];
 $dbname     =    $ini['db_name2']; 

 $conn = new mysqli($servername, $db_username, $db_password, $dbname);


 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

$stmt = $conn->prepare("SELECT *
from products Inner JOIN product_atributes on products.atributes=product_atributes.id Inner JOIN images on products.image=images.id 
WHERE products.id = ? OR products.name = ? ");

$id = 2;
$name = null;
 $stmt->bind_param("is", $id, $name);


 $stmt->execute();
 $result = $stmt->get_result()->fetch_object();

$jason = json_encode($result);


 return $jason;
 $stmt->close();
 $conn->close();
}

}
//test
$test = new conection;
header('Content-Type: application/json');
echo $test->connect();
?>