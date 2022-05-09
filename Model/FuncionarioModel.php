<?php
    class FuncionarioModel {
        
        public $id, $nome, $email, $pass;
        public $arr_funcionarios;

        public function save() {
            $dao = new FuncionarioDAO();

            if($this->id == null) {
                $dao->insert($this);
            } else {
                $dao->update($this);
            }
        }

        public function delete(int $id) {
            $dao = new FuncionarioDAO();
            $dao->delete($id);
        }

        public function getAllRows() {
            $dao = new FuncionarioDAO();
            $this->arr_funcionarios = $dao->getAllRows();
        }

        public function getById(int $id) {
            $dao = new FuncionarioDAO();
            $obj = $dao->getById($id);

            // Operador Ternário
            // ? = Então | : = Se não
            return ($obj) ? $obj : new FuncionarioModel();
        }
    }