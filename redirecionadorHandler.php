<?php
include_once __DIR__ . '/inicial/init.php';

file_put_contents($_ENV["PROJECT_ROOT"] . '/saida_log.txt', "\n\nchegou no redirecionadorHandler", FILE_APPEND);

$retorno = $redirecionadorController->redirecionar('cliente.cadastrar', 0, 'view');

file_put_contents($_ENV["PROJECT_ROOT"] . '/saida_log.txt', "\n\nretorno no redirecionadorHandler: " . $retorno, FILE_APPEND);

echo $retorno;
//require $retorno;
// if (isset($_POST['rota'])) {

//     $rota = $_POST['rota'];

//     $redirecionadorController->redirecionar($rota, $_POST['dados'], $_POST['tipo_rota']);
// }