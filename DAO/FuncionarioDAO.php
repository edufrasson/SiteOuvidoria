<?php
    class FuncionarioDAO {

        public $conexao;
        public function __construct()
        {
            DEFINE("HOST", "metoda.com.br");
            DEFINE("BANCO", "metodaco_ouvidoria");
            DEFINE("USER", "metodaco_alunos");
            DEFINE("PASS", "jau@2022");
            
            try {
                $this->conexao = new PDO("mysql:host=".HOST.";dbname=".BANCO, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $err) {
                echo "[X] - Foi detectado um erro ao tentar se conectar ao banco de dados MySql80. <br>";
                echo "<p>$err</p>";
            }
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