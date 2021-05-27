<?php
namespace products;
include "getData.php";
include "setData.php";

class main{
    private string $search;
    private int $get;

    function __construct($search,$sort) {
        $this->search = $_POST['search'];
        $this->get = $_POST['get'];

        $this -> main();

      }
    function main(){
        if($this->get){
        $data = new getData;
        $data->text($this->search,);
        header('Content-Type: application/json');
        echo $data;


        }
      elseif(!$this->get){

      }
    }







      function __destruct() {
        $this-> search=null;
        $this-> sort=null;
    }

}


?>