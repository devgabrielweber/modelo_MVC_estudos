<?php
$host = $_ENV['DB_SERVER'];
$usr = "root";
$psswd = $_ENV['DB_PSSWD'];


class conexao
{
    private $conexao;
    private $usado;
    public function __construct()
    {
        $host = $_ENV['DB_SERVER'];
        $usr = "root";
        $psswd = $_ENV['DB_PSSWD'];

        $this->conexao = new mysqli($host, $usr, $psswd);
        $this->usado = False;
    }

    public function esta_usado()
    {
        return $this->usado;
    }

    public function get_conexao()
    {
        return $this->conexao;
    }
}

class database_pool
{
    private $conexoes;
    private $qtd;
    public function __construct($qtd = 2)
    {
        $this->conexoes = [];
        $this->qtd = $qtd;
    }

    function gera_conexoes($qtd)
    {
        $connections = [];
        for ($i = 0; $i < $qtd; $i++) {
            $connections[$i] = new conexao();
        }
        $this->conexoes = $connections;
    }

    function pega_conexao()
    {
        for ($i = 0; $i < $this->conexoes; $i++) {
            if ($this->conexoes[$i]->esta_usado() != False) {
                return $this->conexoes[$i];
            }
        }
    }
}