<?php
    class FuncionarioModel {
        
        public $id, $nome, $email, $pass;
        public $arr_funcionarios;

        public function salvarFuncionario() {
            $dao = new FuncionarioDAO();

            if($this->id == null) {
                $dao->insertFuncionario($this);
            } else {
                $dao->updateFuncionarioById($this);
            }
        }

        public function deleteFuncionario(int $id) {
            $dao = new FuncionarioDAO();
            $dao->deleteFuncionarioById($id);
        }

        public function getAllRowsFuncionario() {
            $dao = new FuncionarioDAO();
            $this->arr_funcionarios = $dao->selectAllFuncionario();
        }

        public function getByIdFuncionario(int $id) {
            $dao = new FuncionarioDAO();
            $obj = $dao->selectFuncionarioById($id);

            // Operador Ternário
            // ? = Então | : = Se não
            return ($obj) ? $obj : new FuncionarioModel();
        }
    }