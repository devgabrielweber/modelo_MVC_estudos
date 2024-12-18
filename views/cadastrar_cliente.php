<?php
require_once __DIR__ . "/../inicial/init.php";
require_once $_ENV["PROJECT_ROOT"] . "/controllers/clienteController.php";
?>
<?php
if (isset($_POST['nome'])) {
    var_dump($_POST);
    $clienteController = new clienteController();
    $clienteController->cadastrar($_POST);
}
?>
<html>
<form method="POST">
    <label>Nome: </label>
    <input type="text" name="nome">
    <label>CPF: </label>
    <input type="text" name="cpf">
    <input type="hidden" name="rota" value="cliente.cadastrar">
    <input type="submit">
</form>

</html>