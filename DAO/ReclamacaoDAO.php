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

    public function getAllByStatus($status){
        $sql = 'SELECT * FROM view_reclamacao WHERE status_reclamacao = ? ';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $status);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function changeStatus($id, $status){
        $sql  = "UPDATE Reclamacao SET status = ? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $status);
        $stmt->bindValue(2, $id);
        $stmt->execute();
    }
}