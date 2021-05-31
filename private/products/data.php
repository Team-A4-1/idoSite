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

     if ($search['name']!=null){
        $result= $data->text($search['name']);
        }
        elseif($search['id']!=null ){
        $result= $data->text($search['id']);

        }
        else{
         $result=json_encode( $status["status"]="fill in either id or name field in json");
        }
        header('Content-Type: application/json');
        echo  $result;

        }
      elseif(!$get){
        header('Content-Type: application/json');
         echo json_encode($status["status"]="failed pls try post");

      }

    }

     
    

}
$start = new data;
$start->main($input['data'],$input['post']);

?>