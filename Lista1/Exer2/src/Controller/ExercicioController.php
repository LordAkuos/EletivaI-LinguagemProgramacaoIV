<?php


namespace Aluno\Exer2\Controller;


class ExercicioController {
    public static function exibirResultado(){
        $valor1 = $_POST['quilo'];
        $qtde = $_POST['qtde'];
        $valorTotal = $valor1 * $qtde;

        echo "O valor do total do produto é R$ $valorTotal";
        require_once("../src/View/exer2.php");
    }
}