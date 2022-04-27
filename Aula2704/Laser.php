<?php

class Laser extends Impressora
{
    private $capacidadeToner;
    private $frenteVerso;

    public function getCapacidadeToner(){
        return $this->capacidadeToner;
    }
    public function setCapacidadeToner($capacidadeToner){
        $this->capacidadeToner = $capacidadeToner;
    }

    public function getFrenteVerso(){
        return $this->frenteVerso;
    }
    public function setFrenteVerso($frenteVerso){
        $this->frenteVerso = $frenteVerso;
    }
}


?>