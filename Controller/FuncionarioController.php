<?php
    class FuncionarioController {
        
        public static function form() {
            $model = new FuncionarioModel();

            if(isset($_GET['id'])) $model = $model->getById( (int) $_GET['id'] );

            include "./View/modules/Funcionario/formFuncionario.php";
        }

        public static function listarFuncionario() {
            $model = new FuncionarioModel();
            $model->getAllRows();

            include "./View/modules/Funcionario/listarFuncionario.php";
        }

        public static function save() {
            $model = new FuncionarioModel();
            $model->id = $_POST['id-funcionario'];
            $model->nome = $_POST['nome-funcionario'];
            $model->email = $_POST['email-funcionario'];
            $model->pass = $_POST['senha-funcionario'];
            $model->save();

            header("Location: /funcionario/listar");
        }

        public static function delete() {
            $model = new FuncionarioModel();

            $model->delete( (int) $_GET['id'] );

            header("Location: /funcionario/listar");
        }
    }