<?php
namespace products{
class main{
    private $search;
    private $sort;

    function __construct($search,$sort) {
        $this->search = $_POST[''];
        $this->sort = $_POST[''];

      }
      function __destruct() {
        $this-> search=null;
        $this-> sort=null;
    }

}

}
?>