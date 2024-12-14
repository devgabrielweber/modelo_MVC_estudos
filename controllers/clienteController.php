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
        return $dados;
    }
}
