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

        public function buscar($dados_busca){
            $dados = "%" . $dados_busca . "%";

            $sql = "SELECT nome, cpf, email, telefone, sexo, 
                    date_format(data_cadastro, '%d/%m/%Y') AS data_cadastro 
                    FROM Cidadao WHERE nome LIKE ? OR email LIKE ? OR cpf LIKE ?";
    
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $dados);
            $stmt->bindValue(2, $dados);   
            $stmt->bindValue(3, $dados);           
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
    }