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
- Redirecionamento e rotas: implementei uma funcionalidade de redirecionamento básico, através da classe ```Redirecionador```, que tem as funções ```set_rota()``` e ```redirecionar()```. Para fazer o redirecionamento, utilizo a função ```header()``` do php. Adicionalmente, no arquivo ```/rotas/rotas.php```, é possível criar as rotas do sistema.