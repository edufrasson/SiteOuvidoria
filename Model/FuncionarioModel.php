<?php
    class FuncionarioModel {
        
        public $id, $nome, $email, $pass;

        public function salvarFuncionario() {

            if($this->id == null) {
                $dao = new FuncionarioDAO();
                $dao->insertFuncionario($this);
            } else {
                // Update
            }
        }
    }