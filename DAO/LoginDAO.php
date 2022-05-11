<?php
    class LoginDAO {
        
        public $conexao;
        public function __construct()
        {
            include_once 'MySQL.php';
    
            $this->conexao = new MySQL();
        }

        function selectByUserForLogin(LoginModel $model) {
            $sql = "SELECT id, nome, email, senha FROM Funcionario WHERE senha = ? AND nome = ? OR email = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, sha1($model->senha) );
            $stmt->bindValue(2, $model->nome);
            $stmt->bindValue(3, $model->email);
            $stmt->execute();

            return $stmt->fetchObject();
        }
    }