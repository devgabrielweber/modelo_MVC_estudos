<?php
require_once __DIR__ . '/api_handler.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Content-Type: application/json, charset=UTF-8");

$request = [
    "uri" => explode($_SERVER['REQUEST_URI'], '/'),
    "metodo" => $_SERVER['REQUEST_METHOD']
];

$apiHandler = new apiController();

?>