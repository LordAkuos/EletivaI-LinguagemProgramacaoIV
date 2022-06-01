<?php

require_once __DIR__.'/vendor/autoload.php';

//Aqui, a gente recupera o que o usuário digitou e qual método HTTP ele utilizou.
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instanciar classe Router:
$router = new \Aluno\Filipe\Lista1\Exer1\src\Router($method, $path);

//Adicionar as rotas válidas abaixo:

$router->get('/ola-mundo', function(){
    return "Olá Mundo!";
});

$router->get('/exemplo', 'Aluno\Filipe\Lista1\Exer1\Controller\ExercicioController::exibir');

$router->post('/exemplo-resultado', 'Aluno\Filipe\Lista1\Exer1\Controller\ExercicioController::exibirResultado');

//Adicionar as rotas válidas acima

$result = $router->handler();

if (!$result) {
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());