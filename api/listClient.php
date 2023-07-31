<?php 
require_once "services/request.php";
class ApiListClient {
    private $pdo;
    private $req = "SELECT * FROM clients";
    private $result;
    public function __construct() {
        
    }

    public function run() {
        $this->req = "SELECT * FROM clients";
        $this->pdo = new MyRequest($this->req);
        $this->result = $this->pdo->res;
        header('Content-Type: application/json');
        return json_encode($this->pdo->res);
    }

}
?>