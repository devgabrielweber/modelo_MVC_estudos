<?php
require $_ENV['PROJECT_ROOT'] . '/inicial/init.php';

$redirecionador->set_rota("/teste.php", "teste");
$redirecionador->set_rota('/index.php', 'index');
$redirecionador->set_rota('/views/cliente.php', 'clientes');