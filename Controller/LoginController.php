<?php
    class LoginController {
        
        public static function form() {
            include 'View/modules/Login/Login.php';
        }

        public static function processar() {
            $model = new LoginModel();
            $model->nome = $_POST['email-username'];
            $model->email = $_POST['email-username'];
            $model->senha = $_POST['senha'];
            $model->sendDataDAO();
            $model->authenticateLogin();
        }
    }