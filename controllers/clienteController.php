<?php
include './../models/cliente.php';

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
