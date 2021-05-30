<?php
namespace products;
require_once('getData.php');

include "setData.php";
// $input = $_POST['input'];
$input = json_decode(stripslashes(file_get_contents("php://input")),true);



class data{
   
    // main
    function main($search,$get=true){
        if($get){
        $data = new getData;

     if (isset($search['name'])){
        $result= $data->text($search['name']);
        }
        elseif(isset($$search['id'])){
        $result= $data->text($search['id']);

        }
        header('Content-Type: application/json');
        echo  $result;

        }
      elseif(!$get){

      }

    }

     
    

}
$start = new data;
$start->main($input['data'],$input['post']);

?>