<?php

require_once __DIR__.'/vendor/autoload.php';

//Aqui, a gente recupera o que o usuário digitou e qual método HTTP ele utilizou.
$method = $_SERVER['REQUEST_METHOD'];