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
}