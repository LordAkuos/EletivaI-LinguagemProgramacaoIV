<?php

namespace Aluno\Exer5\Controller;


class ExercicioController {
    public static function exibir(){
        require_once("../src/View/exer5.php");
    }
    
    public static function exibirResultado(){
        $soma = 0;
        for ($i=1; $i <= 4; $i++) { 
            $vetor[$i] = $_POST["nota$i"];
            $soma = $soma + $vetor[$i];
        }
        $media = $soma / 4;
        $exibirMedia = "A média do aluno é $media";
        require_once("../src/View/exer5.php");
    }
}

?>