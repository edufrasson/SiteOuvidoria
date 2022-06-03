<?php
    class FuncionarioController extends Controller {
        
        public static function form() 
        {
            parent::isAuthenticated();

            $model = new FuncionarioModel();

            if(isset($_GET['id'])) $model = $model->getById( (int) $_GET['id'] );

            parent::render('Funcionario/formFuncionario', $model);
        }

        public static function listarFuncionario() {
            parent::isAuthenticated();

            $model = new FuncionarioModel();
            $model->getAllRows();

            include './View/modules/Funcionario/listarFuncionario.php';
        }

        public static function myAccount(){
            parent::isAuthenticated();

            parent::render('MeuPerfil/MeuPerfil');
        }

        public static function save() {
            $model = new FuncionarioModel();
            $model->id = $_POST['id'];
            $model->nome = $_POST['nome'];
            $model->email = $_POST['email'];
            $model->pass = $_POST['senha'];
            $model->save();

            header("Location: /funcionario/listar");
        }

        public static function delete() {
            $model = new FuncionarioModel();

            $model->delete( (int) $_GET['id'] );

            header("Location: /funcionario/listar");
        }
    }