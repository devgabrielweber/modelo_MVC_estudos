<?php
require_once __DIR__ . "/../inicial/init.php";
require_once $_ENV["PROJECT_ROOT"] . "/api/v1/api_handler.php";
class Redirecionador
{
    private $rotas;
    private $grupos;
    public function __construct()
    {
        $this->rotas = [];
        $this->grupos = [];
    }
    public function set_rota($nome, $request_metodo, $controller_metodo)
    {
        $this->rotas[$nome] = ["request_metodo" => $request_metodo, "controller@metodo" => $controller_metodo];
    }
    public function redirecionar($nome_rota, $dados, $tipo_conexao)
    {
        //debug
        file_put_contents($_ENV["PROJECT_ROOT"] . '/saida_log.txt', "\nchegou no redirecionador (model) -> redirecionar", FILE_APPEND, );
        //fim debug

        //pega informações da rota
        $rota = $this->rotas[$nome_rota];

        //tenta dar require no controller
        try {
            [$controller, $metodo] = explode("@", $rota['controller@metodo']);

            file_put_contents($_ENV["PROJECT_ROOT"] . "/saida_log.txt", "\n\ntentou acessar" . $_ENV["PROJECT_ROOT"] . '/controllers\/' . $controller, FILE_APPEND);
            require_once $_ENV["PROJECT_ROOT"] . '/controllers/' . $controller . ".php";

        } catch (\Throwable $th) {

            file_put_contents($_ENV["PROJECT_ROOT"] . "/saida_log.txt", "\nnão conseguiu acessar o controller! erro: " . $th, FILE_APPEND);

            throw $th;
        }


        //tenta castar o controller
        try {
            $controller = new $controller();
        } catch (\Throwable $th) {
            file_put_contents($_ENV["PROJECT_ROOT"] . "/saida_log.txt", "\nnão conseguiu castar o controller! erro: " . parse_str($th), FILE_APPEND);

            throw $th;
        }

        //se for do tipo API
        if ($tipo_conexao == 'api') {
            //verifica se o método da rota é api
            if ($rota["metodo"] != "api") {
                $_SESSION['erro'] = "Não é uma rota API!";
                return "Não é uma rota API!";
            } else {
                //se for api, chama o controller e retorna echo em json
                return json_encode($controller->$metodo($dados));
            }
        } else {
            //se não for api, chama o método
            $retorno = $controller->$metodo($dados);
            return $retorno;
        }


    }
    public function get_rotas()
    {
        return $this->rotas;
    }
}