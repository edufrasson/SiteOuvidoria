<?php
    session_start();

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
                $_SESSION['usuario'] = array($dados_do_usuario->id, $dados_do_usuario->nome, $dados_do_usuario->email, $dados_do_usuario->senha);
                header("Location: /home");
            } else {
                header("Location: /login");
            }
        }
    }