<?php

namespace Aluno\Exer4\Controller;


class ExercicioController {
    public static function exibirResultado(){
        $numero = $_POST['num'];
        if ($numero < 0) {
            echo "Número negativo";
        }elseif ($numero > 0) {
            echo "Número positivo";
        }else {
            echo "Igual a zero";
        }
        require_once("../src/View/exer4.php");
    }
}

?>