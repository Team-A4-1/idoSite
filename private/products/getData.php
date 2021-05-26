<?php
namespace products;
require_once('conection.php');

class getData{
    function  text(string $search =null,bool $asc=true,int $price=null){
       $connection = new conection;
        $test= $connection->connect($search);

      
       $result = $test;
       
        return  $result;

    }
    function  id(int $id =null ,bool $asc=true,int $price=null){
        $connection = new conection;
        $result= $connection->connect($id);
        return $result;
    }
 


}    
//test
header('Content-Type: application/json');
$test = new getData;
print_r($test->text(null,true,));
?>