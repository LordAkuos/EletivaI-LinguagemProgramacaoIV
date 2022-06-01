<?php

namespace Aluno\ProjetoPhp\Model\DAO;

use Aluno\ProjetoPhp\Model\Entity\Produtos;

class ProdutosDAO {
    public function inserir(Produtos $s){
        try {
            $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $s->getNome());
            $p->bindValue(":descricao", $s->getDescricao());
            $p->bindValue(":valor", $s->getValor());
            return $p->execute();
        } catch (\Exception $e) {
            return false;
        }
    }
    
    public function alterar(Produtos $s){
        try{
            $sql = "UPDATE `produtos` SET `nome`=:nome,`descricao`=:descricao,`valor`=:valor WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $s->getNome());
            $p->bindValue(":descricao", $s->getDescricao());
            $p->bindValue(":valor", $s->getValor());
            $p->bindValue(":id", $s->getId());
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){

    }

    public function excluir($id){

    }
}

?>