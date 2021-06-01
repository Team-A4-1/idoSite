<?php
namespace products;

use Attribute;

require_once('getData.php');

include "setData.php";
// $input = $_POST['input'];
$input = json_decode(stripslashes(file_get_contents("php://input")),true);


class data{
   
    // main
    function main($search,$get=true){
        if($get){
        $data = new getData;
        $result=null;
     if ($search['name']!=null){
        $result= $data->text($search['name']);
        }
        elseif($search['id']!=null ){
        $result= $data->text($search['id']);

        }
        else{
          $result= $data->text(null);
        }
        header('Content-Type: application/json');
        echo $result;
        }
      elseif(!$get){
        header('Content-Type: application/json');
         echo json_encode($status["status"]="failed pls try post");

      }

    }

     
    

}
$data = new data;
$data->main($input['data'],$input['atributes']['asc']);

?>