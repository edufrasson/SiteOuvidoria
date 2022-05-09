<?php
    class FuncionarioController {
        
        public static function formFuncionario() {
            $model = new FuncionarioModel();

            if(isset($_GET['id'])) $model = $model->getByIdFuncionario( (int) $_GET['id'] );

            include "./View/modules/Funcionario/formFuncionario.php";
        }

        public static function listarFuncionario() {
            $model = new FuncionarioModel();
            $model->getAllRowsFuncionario();

            include "./View/modules/Funcionario/listarFuncionario.php";
        }

        public static function salvarFuncionario() {
            $model = new FuncionarioModel();
            $model->id = $_POST['id-funcionario'];
            $model->nome = $_POST['nome-funcionario'];
            $model->email = $_POST['email-funcionario'];
            $model->pass = $_POST['senha-funcionario'];
            $model->salvarFuncionario();

            header("Location: /funcionario/listar");
        }

        public static function deleteFuncionario() {
            $model = new FuncionarioModel();

            $model->deleteFuncionario( (int) $_GET['id'] );

            header("Location: /funcionario/listar");
        }
    }