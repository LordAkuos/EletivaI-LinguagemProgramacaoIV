<?php


namespace Aluno\Exer2\Controller;


class ExercicioController {
    public static function exibirResultado(){
        $num = $_POST['numero'];
        if ($num < 10) {
            echo "O número $num é menor que 10.";
        }
        if ($num == 10) {
            echo $num;
        }
        if ($num > 10) {
            echo "O número $num é maior que 10.";
        }
        require_once("../src/View/exer2.php");
    }
}