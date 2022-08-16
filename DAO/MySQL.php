<?php

class MySQL extends PDO {
    
    private $dsn = 'mysql:host=metoda.com.br:3306;dbname=metodaco_ouvidoria';
    private $user = "metodaco_alunos";
    private $pass = "jau@2022";

    public function __construct()
    {
        try {
            
            return parent::__construct(
                $this->dsn, 
                $this->user, 
                $this->pass, 
                array(PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'")
            );

        } catch (PDOException $err) {
            echo "Oooo irmãozinho... Deu erro ai $err";
        }
    }
}
    
