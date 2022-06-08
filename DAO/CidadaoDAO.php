<?php
    class CidadaoDAO {
        public $conexao;
        public function __construct()
        {
            include_once 'MySQL.php';
    
            $this->conexao = new MySQL();
        }  

        public function selectCidadao() {
            $sql = "SELECT nome, cpf, email, telefone, sexo, date_format(data_cadastro, '%d/%m/%Y') AS data_cadastro FROM Cidadao;";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
    }