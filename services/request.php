<?php 
require_once "classes/pdo.php";

class MyRequest {
    public $res;
    public function __construct($req) {
       $this->res = new MyPdo($req);
    }
}
?>