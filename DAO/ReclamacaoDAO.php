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

    public function buscar($dados_busca){
        $dados = "%" . $dados_busca . "%";

        $sql = "SELECT * FROM view_reclamacao WHERE titulo LIKE ? OR descricao LIKE ? OR categoria LIKE ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados);
        $stmt->bindValue(2, $dados);
        $stmt->bindValue(3, $dados);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function delete($id){
        $sql = 'DELETE FROM Reclamacao WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();       
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

    /* Funções utilizadas na página estatística  */

    public function getCountByStatus(){
        $sql = "SELECT * FROM total_reclamacoes_por_status";

        $stmt = $this->conexao->prepare($sql);   
        $stmt->execute();

        while($d = $stmt->fetchObject())
            $arr_dados[] = $d;

        return $arr_dados;    
    }
}