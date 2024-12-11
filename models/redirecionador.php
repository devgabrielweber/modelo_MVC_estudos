<?php
require_once __DIR__ . "../inicial/init.php";
require_once $_ENV["PROJECT_ROOT"] . "/api/v1/api_handler.php";
class Redirecionador
{
    private $rotas;
    public function __construct()
    {
        $this->rotas = [];
    }
    public function set_rota($view_destino, $nome)
    {
        $this->rotas[$nome] = $view_destino;
    }
    public function redirecionar($nome_rota, $dados)
    {
        if ($dados["API"] == true) {

        }
        foreach ($dados as $key => $dado) {
            $_SESSION[$key] = $dado;
        }
        $rota = $this->rotas[$nome_rota];
        require $_ENV["PROJECT_ROOT"] . $rota;
    }
    public function get_rotas()
    {
        return $this->rotas;
    }
}