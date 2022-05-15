<?php
    session_start();

    class LoginModel {
        public $nome, $email, $senha;
        public $user_cookie;

        public function sendDataDAO() {
            $dao = new LoginDAO();
            $dao->selectByUserForLogin($this);
        }

        public function authenticateLogin() {
            $dao = new LoginDAO();
            $dados_do_usuario = $dao->selectByUserForLogin($this);

            if($dados_do_usuario) {
                $_SESSION['usuario'] = array($dados_do_usuario->id, $dados_do_usuario->nome, $dados_do_usuario->email, $dados_do_usuario->senha);
                //return($this->nome == null) ? $this->user_cookie = $this->email : $this->user_cookie = $this->nome;
                //self::remember($this->nome);
                header("Location: /home");
            } else {
                header("Location: /login");
            }
        }

        /*private static function remember($user) {
            $validade = strtotime("+1 month");
            setcookie("funcionario_nome_email", $user, $validade, "/", "", false, true);
        }*/
    }