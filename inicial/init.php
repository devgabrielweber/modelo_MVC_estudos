<?php
use Dotenv\Dotenv;

//importa o autoload.php
require_once __DIR__ . "/../vendor/autoload.php";

//cria instancia da classe dotenv e carrega .env
$dotenv = Dotenv::createImmutable(__DIR__ . "/..");
$dotenv->load();

require_once $_ENV['PROJECT_ROOT'] . '/controllers/redirecionadorController.php';
$redirecionadorController = new RedirecionadorController();

require_once $_ENV['PROJECT_ROOT'] . '/rotas/rotas.php';

require_once $_ENV['PROJECT_ROOT'] . "/index.php";

