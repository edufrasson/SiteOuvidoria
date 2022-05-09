<?php

class MySQL extends PDO{
    private $dsn = "mysql:metoda.com.br:3308;dbname=metodaco_ouvidoria";
    private $user = "metodaco_alunos";
    private $pass = "jau@2022";

    public function __construct()
    {
        return parent::__construct($this->dsn, $this->user, $this->pass);
    }
}
    
