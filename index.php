<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Content-Type: text/html, charset=UTF-8");

define('ROOT_PROJETO', __DIR__);
require_once ROOT_PROJETO . "/inicial/init.php";

if (isset($_SESSION['erro'])) {
    echo $_SESSION['erro'];
}

$redirecionadorController->redirecionar('clientes.listar', 0);
