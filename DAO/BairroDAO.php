<?php

class BairroDAO{
    public $conexao;
        public function __construct()
        {
            include_once 'MySQL.php';
    
            $this->conexao = new MySQL();
        }
        
        public function insert(BairroModel $model) {

            $sql = "INSERT INTO Bairro (nome, data_cadastro) VALUES (?, ?)";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->data_cadastro);
            
            $stmt->execute();
            
        }

        public function getAllRows() {

            $sql = "SELECT * FROM Bairro";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        }

        public function getById(int $id) {

            $sql = "SELECT * FROM Bairro WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject("BairroModel");

        }

        public function delete(int $id) {

            $sql = "DELETE FROM Bairro WHERE id = ?";
            
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

        }

        public function update(BairroModel $model) {

            $sql = "UPDATE Bairro SET nome = ?, data_cadastro = ? WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->data_cadastro);            
            $stmt->bindValue(3, $model->id);

            $stmt->execute();
        }
}