<?php

define('ROOT_PROJETO', __DIR__);

require_once(ROOT_PROJETO . "/inicial/init.php");

$redirecionador->redirecionar("teste", 0);

//chama o database
require "./models/database.php";
