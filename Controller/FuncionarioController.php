<?php
    class FuncionarioController {
        
        public static function formFuncionario() {
            include "./View/modules/Funcionario/formFuncionario.php";
        }

        public static function listarFuncionario() {
            $model = new FuncionarioModel();
            $model->getAllRowsFuncionario();

            include "./View/modules/Funcionario/listarFuncionario.php";
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