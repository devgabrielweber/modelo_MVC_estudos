<?php
require_once __DIR__ . "/../inicial/init.php";
require_once $_ENV["PROJECT_ROOT"] . "/controllers/clienteController.php";

//$clienteController = new clienteController();
//$clientes = $clienteController->listar();
?>
< <html>
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
        // foreach ($clientes as $cliente) {
        //     echo '<tr>
        //         <td>' . $cliente[0] . '</td>
        //         <td>' . $cliente[1] . '</td>
        //         <td>' . $cliente[2] . '</td>
        //         </tr>';
        // }
        ?>
    </table>

    </html>