<?php
require_once(__DIR__ . "/inicial/init.php");

//chama o database
require "./models/database.php";

?>

<html>

<a href="<?php echo $redirecionador->redirecionar('clientes', 0) ?>">
    redirecionar para clientes
</a>

</html>