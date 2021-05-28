<?php
namespace products;
require_once('conection.php');

class getData{
    function  text(string $search =null,bool $asc=true,int $price=null){
       $connection = new conection;
       $conres= $connection->connect($search);      
       $result = json_decode($conres, true) ;
       $status = $result['status'];

       unset($result['status']);
       if(!$asc){
        usort($result, function($a, $b) {
            return strcmp ($a['name'] , $b['name'])? +1: 1 ;
            });
       }
       else{
            usort($result, function($a, $b) {
            return strcmp ($a['name'] , $b['name'])? -1: 1 ;
            });
        }

        $result['status'] = $status;
        $result= json_encode($result);
        return $result;

    }
    function  id(int $id =null ,bool $asc=true,int $price=null){
        $connection = new conection;
        $conres= $connection->connect($id);
        $result = json_decode($conres, true) ;
        $status = $result['status'];
        unset($result['status']);

        if($asc){
        sort($result);
        }
        else{
        rsort($result);
        }
        $result['status'] = $status;
        $result= json_encode($result);
        return $result;
    }
 


}    

?>