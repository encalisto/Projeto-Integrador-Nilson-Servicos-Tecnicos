<?php
require_once(__DIR__ . '/../General/database.php');

class UnivespModel {
    private $conn;

    /*--------------- CONSTRUCT DO BANCO DE DADOS ---------------*/
    public function __construct() {
        global $conexao;
        $this->conn = $conexao;
    }



    /*--------------- RETORNA O OBJETO BANCO DE DADOS ---------------*/
    public function getDatabase(){
        return $this->conn;
    }
}
?>