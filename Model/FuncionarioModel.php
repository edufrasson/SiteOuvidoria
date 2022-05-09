<?php
    class FuncionarioModel {
        
        public $id, $nome, $email, $pass;
        public $arr_funcionarios;

        public function salvarFuncionario() {

            if($this->id == null) {
                $dao = new FuncionarioDAO();
                $dao->insertFuncionario($this);
            } else {
                // Update
            }
        }

        public function getAllRowsFuncionario() {
            $dao = new FuncionarioDAO();
            $this->arr_funcionarios = $dao->selectAllFuncionario();
        }
    }