<?php
    class FuncionarioController {
        
        public static function formFuncionario() {
            include "./View/modules/Funcionario/formulario.php";
        }

        public static function salvarFuncionario() {

            $model = new FuncionarioModel();
            $model->nome = $_POST['nome-funcionario'];
            $model->email = $_POST['email-funcionario'];
            $model->pass = $_POST['senha-funcionario'];
            $model->salvarFuncionario();

            header("Location: /cadastrar/funcionario");
        }
    }