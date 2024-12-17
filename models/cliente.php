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
        try {
            $query = "INSERT INTO cliente(nome,cpf) VALUES ('" . $dados['nome'] . "'," . $dados['cpf'] . ");";
            file_put_contents($_ENV["PROJECT_ROOT"] . "/saida_log.txt", "\n A query é:" . $query, FILE_APPEND);
            $msg = $this->conn->query($query);

        } catch (\Throwable $th) {
            $_SESSION['erro'] = $th;
            throw $th;
        }
    }
}