<?php

if ($_SERVER["REQUEST_URI"] == "/api/v1") {
    $dados = ["uri" => $_SERVER["REQUEST_URI"], "api" => true];
    $redirecionadorController->redirecionar('api', $dados);
}


define('ROOT_PROJETO', __DIR__);
require_once ROOT_PROJETO . "/inicial/init.php";
require_once $_ENV["PROJECT_ROOT"] . "/controllers/redirecionadorController.php";
//$redirecionadorController->redirecionar("teste", 0);

//chama o database
require_once "./models/database.php";

if (isset($_SESSION['erro'])) {
    echo $_SESSION['erro'];
}