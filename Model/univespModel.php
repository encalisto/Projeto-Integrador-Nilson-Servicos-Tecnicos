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




    /*--------------- INSERE O ACESSO NO BANCO DE DADOS ---------------*/
    public function insertAcesso($ip, $browser, $pagina) {
        $stmt = $this->conn->prepare("INSERT INTO acesso (ip, so, pagina) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $ip, $browser, $pagina);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>