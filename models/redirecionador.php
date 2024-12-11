<?php
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
        foreach ($dados as $key => $dado) {
            $_SESSION[$key] = $dado;
        }
        $rota = $this->rotas[$nome_rota];
        return header('Location: ' . $rota, true, 303);
    }

    public function get_rotas()
    {
        return $this->rotas;
    }
}