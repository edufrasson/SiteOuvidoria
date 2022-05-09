<?php
    class FuncionarioDAO {

        public $conexao;
        public function __construct()
        {
            include_once 'MySQL.php';
    
            $this->conexao = new MySQL();
        }
        
        function insertFuncionario(FuncionarioModel $model) {

            $sql = "INSERT INTO Funcionario (nome, senha, email) VALUES (?, ?, ?)";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, sha1($model->pass));
            $stmt->bindValue(3, $model->email);
            $stmt->execute();
            
        }

        function selectAllFuncionario() {

            $sql = "SELECT * FROM Funcionario";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        }

        function selectFuncionarioById(int $id) {

            $sql = "SELECT * FROM Funcionario WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject("FuncionarioModel");

        }

        function deleteFuncionarioById(int $id) {

            $sql = "DELETE FROM Funcionario WHERE id = ?";
            
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

        }

        function updateFuncionarioById(FuncionarioModel $model) {

            $sql = "UPDATE Funcionario SET nome = ?, senha = ?, email = ? WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, sha1($model->pass));
            $stmt->bindValue(3, $model->email);
            $stmt->bindValue(4, $model->id);
            $stmt->execute();

        }
    }