<?php
namespace products;
include "getData.php";
include "setData.php";

class main{
    private string $search;
    private int $get;
    private int $sort;

    function __construct($search,$get,$sort) {
        $this->search = $_POST['search'];
        $this->search = $_POST['search'];
        $this->get = $_POST['get'];

        $this -> main();

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


?>