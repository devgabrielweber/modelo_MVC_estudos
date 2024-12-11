# Sobre o projeto  
Esse é um projeto pessoal que desenvolvo a fim de compreender a fundo o funcionamento de um sistema no modelo MVC (Model, View, Controller).  
O objetivo é codar um sistema MVC completo do zero, desde a conexão ao banco, até o funcionamento das rotas e API em um nível cada vez mais profundo.

## Work in progress:  
Esse é um projeto em desenvolvimento contínuo, portanto não o considere finalizado. Novas funcionalidades e atualizações virão com o tempo, e esse documento conterá todas as informações importantes do estado atual do projeto.

## Atualizações:  
### Tecnologias:  
- MySQLi: No momento, a extensão nativa do PHP "MySQLi" é utilizada para tratar a conexão com o banco;
- .env: Adicionalmente, a biblioteca vlucas/phpdotenv foi adicionada ao projeto, afim de facilitar o carregamento de variáveis de ambiente.
### O que estou desenvolvendo agora?
- Controller: nesse momento, estou estudando e desenvolvendo a melhor maneira de implementar um controller no sistema. Isso está envolvendo o desenvolvimento de um sistema de rotas e redirecionamento (mais informações no tópico abaixo).
- Redirecionamento e rotas: implementei uma funcionalidade de redirecionamento básico, através da classe ```Redirecionador``` e ```redirecionadorController```, que tem as funções ```set_rotas()``` e ```redirecionar()```. Para fazer o redirecionamento, utilizo a função ```header()``` do php. Adicionalmente, no arquivo ```/rotas/rotas.php```, é possível criar as rotas do sistema.
- Api: estou trabalhando na implementação de uma API. Nesse momento, verificando qual a melhor maneira de implementá-la no sistema. Minha intenção é que as rotas sejam definidas em ```/api/v1/rotas_api.php``` e sejam processadas através da classe ```api_handler```. Acredito que será nessessário refatorar ```redirecionadorController``` para que identifique quando uma rota api foi solicitada em encaminhe ao handler, ou fazer o controle através do próprio ```api_handler```.