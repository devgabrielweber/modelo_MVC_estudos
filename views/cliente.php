<?php
require_once __DIR__ . "/../inicial/init.php";
require_once $_ENV["PROJECT_ROOT"] . "/controllers/clienteController.php";
if (isset($dados) != true) {
    $redirecionadorController->redirecionar('cliente.listar', 0, 'view');
    die();
}
?>
<html>
<table>
    <tr>
        <td>
            ID
        </td>
        <td>
            Nome
        </td>
        <td>
            CPF
        </td>
    </tr>
    <?php
    foreach ($dados as $cliente) {
        echo '<tr>
            <td>' . $cliente[0] . '</td>
            <td>' . $cliente[1] . '</td>
            <td>' . $cliente[2] . '</td>
            </tr>';
    }
    ?>
</table>

<button onclick="redirecionar('cliente.cadastrar')">Cadastrar Cliente</button>
<span id="clicou"></span>

</html>