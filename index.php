<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Content-Type: text/html, charset=UTF-8");

define('ROOT_PROJETO', __DIR__);
require_once ROOT_PROJETO . "/inicial/init.php";

if (isset($_SESSION['erro'])) {
    echo $_SESSION['erro'];
}

if (isset($_POST['rota'])) {
    require $redirecionadorController->redirecionar($_POST['rota'], 0, 'view');
} else {
    require $redirecionadorController->redirecionar('cliente.listar', 0, 'view');
}