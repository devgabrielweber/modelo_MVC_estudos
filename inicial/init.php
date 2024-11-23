<?php
require_once './rotas/redirecionador.php';//importa a classe dotenv
use Dotenv\Dotenv;

//importa o autoload.php
require __DIR__ . "/../vendor/autoload.php";

//cria instancia da classe dotenv e carrega .env
$dotenv = Dotenv::createImmutable(__DIR__ . "/..");
$dotenv->load();

$redirecionador = new Redirecionador();

