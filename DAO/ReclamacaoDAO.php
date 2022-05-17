<?php

class ReclamacaoDAO{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new MySQL();
    }

    public function getAllRows(){
        $sql = 'SELECT * FROM view_reclamacao';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function getById($id){
        $sql = 'SELECT * FROM view_reclamacao WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ReclamacaoModel");
    }
}