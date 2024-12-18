<script>
    function redirecionar(rota, dados) {
        form = document.createElement('form')
        form.setAttribute('method', 'POST')
        form.setAttribute('action', '../index.php')
        variavel = document.createElement('input')
        variavel.setAttribute('name', "rota")
        variavel.setAttribute("value", rota)
        variavel.setAttribute('type', 'hidden')
        form.appendChild(variavel);

        for (const key in dados) {
            if (dados.hasOwnProperty(key)) {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = key;
                input.value = data[key];
                form.appendChild(input);
            }
        }

        document.body.appendChild(form);
        form.submit();
    }
</script>

<?php
use Dotenv\Dotenv;

//importa o autoload.php
require_once __DIR__ . "/../vendor/autoload.php";

//cria instancia da classe dotenv e carrega .env
$dotenv = Dotenv::createImmutable(__DIR__ . "/..");
$dotenv->load();

require_once $_ENV['PROJECT_ROOT'] . '/controllers/redirecionadorController.php';
$redirecionadorController = new RedirecionadorController();

require $_ENV['PROJECT_ROOT'] . '/rotas/rotas.php';
