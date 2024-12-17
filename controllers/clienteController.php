<?php
require_once __DIR__ . '/../inicial/init.php';
require_once $_ENV["PROJECT_ROOT"] . '/models/cliente.php';
class clienteController
{
    private $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente();
    }
    public function listar()
    {
        $dados = $this->cliente->listar();
        $_SESSION["dados"] = $dados;
        return require $_ENV["PROJECT_ROOT"] . "/views/cliente.php";
    }

    public function cadastrar($dados = null)
    {
        if ($dados != null) {
            $this->cliente->cadastrar($dados);
        }

        return $_ENV["PROJECT_ROOT"] . '/views/cadastrar_cliente.php';
    }
}
