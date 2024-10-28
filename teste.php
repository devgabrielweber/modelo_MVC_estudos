<?php
require_once "./models/cliente.php";

$cliente = new Cliente();
$clientes = $cliente->listar();

var_dump($clientes);

