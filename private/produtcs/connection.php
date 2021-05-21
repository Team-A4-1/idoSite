<?php
namespace products;

class conection {
    function get_data(){
 $ini = parse_ini_file('../../settings.ini');
 $servername =    $ini['server_name'];
 $db_username   =    $ini['db_user'];  
 $db_password   =    $ini['db_password'];
 $dbname     =    $ini['db_name']; 

 $conn = new \mysqli($servername, $db_username, $db_password, $dbname);

 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

$stmt = $conn->prepare("SELECT products.id, products.name , products.text ,
product_atributes.height,product_atributes.width,
product_atributes.depth,product_atributes.price, 
images.imageHIGHres,images.imageLOWres
from products 
Inner JOIN product_atributes on products.atributes=product_atributes.id 
Inner JOIN images on products.image=images.id
 ");

 $stmt->bind_param("ss", $username, $password);


 $stmt->execute();
 $result = $stmt->get_result()->fetch_object();
 return $result;
 $stmt->close();
 $conn->close();
}
}
?>