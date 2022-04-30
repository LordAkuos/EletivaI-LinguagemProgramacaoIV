<?php

class Funcionario {
    private $nome;
    private $codigo;
    private $salarioBase;

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function getCodigo(){
        return $this->codigo;
    }

    public function setSalarioBase($salarioBase){
        $this->salarioBase = $salarioBase;
    }
    public function getSalarioBase(){
        return $this->salarioBase;
    }

    
}

?>