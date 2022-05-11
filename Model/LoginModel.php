<?php
    class LoginModel {
        public $nome, $email, $senha;

        public function sendDataDAO() {
            $dao = new LoginDAO();
            $dao->selectByUserForLogin($this);
        }

        public function authenticateLogin() {
            $dao = new LoginDAO();
            $dados_do_usuario = $dao->selectByUserForLogin($this);

            if($dados_do_usuario) {
                session_start();
                $_SESSION['usuario_logado'] = $dados_do_usuario->id;
                header("Location: /home");
            } else {
                header("Location: /login");
            }
        }
    }