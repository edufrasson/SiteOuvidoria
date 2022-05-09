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
    }