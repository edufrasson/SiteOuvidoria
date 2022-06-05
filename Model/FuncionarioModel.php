<?php
    class FuncionarioModel {
        
        public $id, $nome, $email, $pass;
        public $arr_funcionarios;
        public $nova_senha, $confirmar_nova_senha, $senha_antiga_digitada, $senha_real;
        public $retorno = NULL;

        public function save() {
            $dao = new FuncionarioDAO();
            return ($this->id == null) ? $dao->insert($this) : $dao->update($this);
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
            return ($obj) ? $obj : new FuncionarioModel();
        }

        public function verifyPassword(int $id) {
            $dao = new FuncionarioDAO();
            if($this->nova_senha == $this->confirmar_nova_senha) {
                $this->senha_real = $dao->selectPasswordOfFuncionarioById( (int) $id);

                if($this->senha_antiga_digitada == $this->senha_real->senha) {
                    $dao->updatePasswordOfFuncionario( (int) $id, $this->nova_senha);
                    $this->retorno = "Senha alterada com sucesso!";
                } else {
                    $this->retorno = "Senha antiga incorreta.";
                }
                
            } else {
                $this->retorno = "Nova senha e Confirmar senha não são iguais.";
            }
        }
    }