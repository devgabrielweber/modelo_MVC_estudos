<?php
require __DIR__ . "/database.php";

class Cliente
{
    private $conn;

    public function __construct()
    {
        $this->conn = conecta_banco();
        $this->table = "cliente";
    }

    public function listar()
    {
        $listagem = $this->conn->query("SELECT * FROM cliente");
        return ($listagem->fetch_all());
    }
}