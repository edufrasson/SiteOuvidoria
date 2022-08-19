<?php

class CategoriaDAO{
    public $conexao;
        public function __construct()
        {
            include_once 'MySQL.php';
    
            $this->conexao = new MySQL();
        }
        
        public function insert(CategoriaModel $model) {

            $sql = "INSERT INTO Categoria (descricao, data_cadastro) VALUES (?, CURRENT_TIMESTAMP())";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->descricao);                      
            $stmt->execute();
            
        }

        public function getAllRows() {

            $sql = "SELECT * FROM Categoria";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        }

        public function getById(int $id) {

            $sql = "SELECT * FROM Categoria WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject("CategoriaModel");

        }

        public function delete(int $id) {

            $sql = "DELETE FROM Categoria WHERE id = ?";
            
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

        }

        public function update(CategoriaModel $model) {

            $sql = "UPDATE Categoria SET descricao = ?, data_cadastro = ? WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->descricao);
            $stmt->bindValue(2, $model->data_cadastro);            
            $stmt->bindValue(3, $model->id);

            $stmt->execute();
        }
}