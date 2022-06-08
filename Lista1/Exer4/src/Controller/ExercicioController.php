<?php

namespace Aluno\Exer4\Controller;


class ExercicioController {
    public static function exibir(){
        require_once("../src/View/exer4.php");
    }

    public static function exibirResultado(){
        $numero = $_POST['num'];
        if ($numero < 0) {
            $resultado = "Número negativo";
        }elseif ($numero > 0) {
            $resultado = "Número positivo";
        }else {
            $resultado = "Igual a zero";
        }
        require_once("../src/View/exer4.php");
    }
}

?>