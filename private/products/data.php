<?php
namespace products;
require_once('getData.php');

include "setData.php";
// $input = $_POST['input'];
$input = json_decode(stripslashes(file_get_contents("php://input")));


$input = null;

class data{
   
    // main
    function main($search,$get=true){
        if($get){
        $data = new getData;
        $result= $data->text($search);

        header('Content-Type: application/json');
        echo $result;

        }
      elseif(!$get){

      }

    }

     
    

}
// $start = new data;
// $start->main($input);

echo json_encode($v->email);
?>