<?php
require $_ENV['PROJECT_ROOT'] . '/inicial/init.php';

$redirecionadorController->set_rotas("/teste.php", "teste");
$redirecionadorController->set_rotas('/index.php', 'index');
$redirecionadorController->set_rotas('/api/v1/handler.php', 'api', 'api');
$redirecionadorController->set_rotas('/cliente.php', 'clientes');