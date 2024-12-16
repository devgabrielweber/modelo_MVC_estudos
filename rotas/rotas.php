<?php
require_once __DIR__ . '/../inicial/init.php';

// $redirecionadorController->set_rotas("/teste.php", "teste", "GET");
// $redirecionadorController->set_rotas('/index.php', 'index', "GET");
// $redirecionadorController->set_rotas('/api/v1/handler.php', 'api', "GET", 'api');
$redirecionadorController->set_rotas('clientes.listar', "view", 'clienteController@listar', 'GET');
$redirecionadorController->set_rotas('cliente.cadastrar', 'view', 'clienteController@cadastrar', 'GET');