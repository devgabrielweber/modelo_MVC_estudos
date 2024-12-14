<?php
require_once __DIR__ . "../../inicial/init.php";
require $_ENV["PROJECT_ROOT"] . "/models/redirecionador.php";
class RedirecionadorController
{
    private $rotas = [];
    private $redirecionador;

    public function __construct()
    {
        $this->redirecionador = new Redirecionador();
    }

    public function set_rotas($view_destino, $nome, $tipo = "view")
    {
        switch ($tipo) {
            case 'view':
                $this->redirecionador->set_rota("/views" . $view_destino, $nome);
                break;
            case 'index':
                $this->redirecionador->set_rota($view_destino, $nome);
                break;
            case 'api':
                $this->redirecionador->set_rota("/api/v1" . $view_destino, $nome);
                break;
            default:
                $_SESSION['erro'] = "Método de rotas inexistente! métodos disponíveis: view, api e index";
                $erro = new Exception("Método de rotas inexistente! Métodos disponíveis: view, api e index");
                throw $erro;
        }
    }

    public function redirecionar($nome_rota, $dados)
    {

        file_put_contents($_ENV["PROJECT_ROOT"] . '/saida_rotas.txt', "\n\nredirecionadorController -> redirecionar() chamado! As rotas salvas são: " . json_encode($this->redirecionador->get_rotas()), FILE_APPEND);

        file_put_contents($_ENV["PROJECT_ROOT"] . '/saida_log.txt', "\n\n\nchegou no redirecionadorController rota redirecionar", FILE_APPEND, );
        if (isset($this->redirecionador->get_rotas()[$nome_rota])) {
            file_put_contents($_ENV["PROJECT_ROOT"] . '/saida_log.txt', "\nAchou a rota", FILE_APPEND, );
            $this->redirecionador->redirecionar($nome_rota, $dados);
        } else {

            file_put_contents($_ENV["PROJECT_ROOT"] . '/saida_log.txt', "\nnão achou a rota", FILE_APPEND, );
            $_SESSION["erro"] = "Tentando redirecionar para rota inexistente: " . $nome_rota;
        }
    }

}
?>