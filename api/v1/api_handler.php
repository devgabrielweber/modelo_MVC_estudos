<?php
require_once __DIR__ . "/../../inicial/init.php";

require_once $_ENV["PROJECT_ROOT"] . "/api/v1/rotas_api.php";

class api_handler
{
    private $uri;

    public function __construct($uri)
    {
        $this->uri = $uri;
    }

    public function processar_request()
    {

    }
}

?>