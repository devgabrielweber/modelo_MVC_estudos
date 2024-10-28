<?php
require_once(__DIR__ . "/../inicial/init.php");

function conecta_banco()
{
    $host = $_ENV['DB_SERVER'];
    $usr = "root";
    $psswd = $_ENV['DB_PSSWD'];

    try {
        $conn = new mysqli($host, $usr, $psswd, 'teste');
    } catch (mysqli_sql_exception $e) {
        die("Erro na conexão: " . $e->getMessage());
    }

    return $conn;
}
