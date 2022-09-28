<?php

namespace App\DAO;
use App\Model\RespostaModel;
use \PDO;

class RespostaDAO{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new MySQL();
    }

    public function insert(RespostaModel $model){
        $sql = 'INSERT INTO Resposta (id_funcionario, id_reclamacao, descricao, data_cadastro) VALUES (?, ?, ?, CURRENT_TIMESTAMP)';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->id_funcionario);
        $stmt->bindValue(2, $model->id_reclamacao);
        $stmt->bindValue(3, $model->descricao);
        $stmt->execute();       
        
    }

    public function getById($id){
        $sql = 'SELECT * FROM Resposta WHERE id_reclamacao = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("RespostaModel");
    }

    public function update(){
        
    }
}    