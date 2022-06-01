<?php

namespace Aluno\ProjetoPhp\Model\DAO;

use Aluno\ProjetoPhp\Model\Entity\Produtos;

class PRodutosDAO {
    public function inserir(Produtos $p){
        try {
            $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";
            $p = Conexao::conectar()->prepare($sql);
        } catch (\Exception $e) {
            return false;
        }
    }
}

?>