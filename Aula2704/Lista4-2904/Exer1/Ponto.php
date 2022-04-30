<?php

class Ponto {

    private $x;
    private $y;
    private static $contador;

    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
    }

    public static function setContador(){
           self::$contador;//Usa-se self:: para acessar atributos de classe (estáticos)!
    }
    public static function getContador(){
        return self::$contador;
    }

    public function getX(){
        return $this->x;
    }
    public function setX($x){
        $this->x = $x;
    }

    public function getY(){
        return $this->y;
    }
    public function setY($y){
        $this->y = $y;
    }

    

}

?>