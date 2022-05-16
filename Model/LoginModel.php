<?php
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
                // ? Fazer a verificação se o checkbox foi marcado
                ($this->nome == null) ? $this->user_cookie = $this->email : $this->user_cookie = $this->nome;
                self::remember($this->nome);
                header("Location: /home");
            } else {
                header("Location: /login");
            }
        }

        private static function remember($user) {
            $validade = strtotime("+1 month");
            setcookie("funcionario_user", $user, $validade, "/", "", false, true);
        }

        /*private static function forget() {
            $validade = time() - 3600;
            setcookie("funcionario_user", "", $validade, "/", "", false, true);
        }*/
    }