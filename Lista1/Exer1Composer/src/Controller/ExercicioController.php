<?php


namespace Aluno\Exer1composer\Controller;


class ExercicioController
{
    public static function exibir(){
        require_once("../src/View/exer1.php");
    }

    public static function exibirResultado(){
        $valor1 = $_POST['valorproduto'];
        $valor2 = $_POST['valorpago'];

        if ($valor2 >= $valor1) {
            $troco = $valor2 - $valor1;
            echo "Seu troco é: R$ $troco</br>";
        }else {
            echo "Valor insuficiente!</br>";
        }
        require_once("../src/View/exer1.php");
    }
}