<?php
    class LoginController extends Controller {
        
        public static function form() {
            $usuario = (isset($_COOKIE['funcionario_user'])) ? $_COOKIE['funcionario_user'] : "";
            include "./View/modules/Login/Login.php";
            //parent::render("Login/Login");
        }

        public static function processar() {
            $model = new LoginModel();
            $model->nome = $_POST['email-username'];
            $model->email = $_POST['email-username'];
            $model->senha = $_POST['senha'];
            $model->status_lembrar = isset($_POST['lembrar-de-mim']);
            $model->authenticateLogin();
        }

        public static function logout() {
            if(isset($_GET['sair'])) {
                unset($_SESSION['usuario']);
                $validade = time() - 3600;
                setcookie("funcionario_user", "", $validade, "/", "", false, true);
                header("Location: /login");
            }
        }
    }