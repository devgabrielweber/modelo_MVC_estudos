<?php
use Dotenv\Dotenv;

//importa o autoload.php
require_once __DIR__ . "/../vendor/autoload.php";

//cria instancia da classe dotenv e carrega .env
$dotenv = Dotenv::createImmutable(__DIR__ . "/..");
$dotenv->load();

//require_once $_ENV['PROJECT_ROOT'] . "/index.php"; //importa a classe dotenv
require_once $_ENV['PROJECT_ROOT'] . "/rotas/redirecionador.php"; //importa a classe dotenv

$redirecionador = new Redirecionador();

require_once $_ENV['PROJECT_ROOT'] . "/rotas/rotas.php";
