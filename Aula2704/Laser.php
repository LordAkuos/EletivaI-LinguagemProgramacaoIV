<?php

class Laser extends Impressora
{
    private $capacidadeToner;
    private $frenteVerso;

    public function __construct($modelo, $capacidadeToner, $colorida, $marca, $peso, $frenteVerso)
    {
        $this->setModelo($modelo);
        $this->setCapacidadeToner($capacidadeToner);
        $this->setColorida($colorida);
        $this->setMarca($marca);
        $this->setPeso($peso);
        $this->setFrenteVerso($frenteVerso);
    }

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