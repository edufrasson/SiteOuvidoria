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
            $model = new FuncionarioModel();
            $retorno = $model->verifyPassword($_SESSION['usuario']->id);

            include "./View/modules/MeuPerfil/MeuPerfil.php";
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

        public static function alterarSenha() {
            $model = new FuncionarioModel();
            
            $model->nova_senha = $_POST['nova-senha'];
            $model->confirmar_nova_senha = $_POST['confirmar-senha'];
            $model->senha_antiga_digitada = sha1($_POST['senha-antiga']);
            $model->verifyPassword( (int) $_POST['id-funcionario']);

            header("Location: /meu_perfil");
        }
    }