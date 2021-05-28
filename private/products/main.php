<?php
namespace products;
include "getData.php";
include "setData.php";

class main{
    private string $search;
    private int $get;
    private int $sort;

    function __construct() {
    

  

$required = array('search');
   
$error = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $error = true;
  }
}

    if ($error) {
    header('Content-Type: application/json');
    echo json_encode($result['status']='failed');  
      }   
  else {
    $this->search = $_POST['search'];
    $this->sort = $_POST['sort'];
    $this->get = $_POST['get'];
  $this -> main();

    }

}
    function main(){
        if($this->get){
        $data = new getData;
        $data->text($this->search,);
        $result= $data;


        }
      elseif(!$this->get){

      }


      header('Content-Type: application/json');
        echo $result;
    }







      function __destruct() {
        $this-> search=null;
        $this-> get=null;
        $this-> sort=null;
    }

}
$main = new main;

?>