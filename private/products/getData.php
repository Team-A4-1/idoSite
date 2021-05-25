<?php
namespace products;
require_once('conection.php');

class getData{
    function  text(string $search,$sort = ['asc'=>true,'price'=>null]){
       $connection = new conection;
        $result= $connection->connect();
      
        return $result;
    }
    function  id(int $id ,array $sort = ['asc'=>true,'price'=>null]){
        $result = null;

       
        return $result;
    }
 


}    
//test
$test = new getData;
print_r($test->text("test"));
?>