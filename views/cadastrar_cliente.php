<?php
require_once __DIR__ . "/../inicial/init.php";
require_once $_ENV["PROJECT_ROOT"] . "/controllers/clienteController.php";
?>
<?php
if (isset($_POST)) {
    var_dump($_POST);
}
?>
<html>
<form method="POST" action="cadastrar_cliente.php">
    <label>Nome: </label>
    <input type="text" name="nome">
    <label>CPF: </label>
    <input type="text" name="cpf">
    <input type="submit" value="Enviar">
</form>

</html>