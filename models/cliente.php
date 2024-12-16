<?php
require_once __DIR__ . "/database.php";

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
        $listagem = $this->conn->query("SELECT * FROM cliente ORDER BY id");
        return ($listagem->fetch_all());
    }

    public function cadastrar($dados)
    {
        $query = "INSERT INTO clientes(nome,cpf) VALUES (" . $dados['nome'] . "," . $dados['cpf'];
        $msg = $this->conn->query($query);
    }
}