<?php
namespace products;
include "getData.php";
include "setData.php";

class main{
    private string $search;
    private int $get;

    function __construct($search,$sort) {
        $this->search = $_POST[''];
        $this->get = $_POST[''];

        $this -> main();

      }
    function main(){
        if($this->get){
        $data = new getData;
        $data->text();

        }
      elseif($this->get){

      }
    }







      function __destruct() {
        $this-> search=null;
        $this-> sort=null;
    }

}


?>