<?php
    class LoginModel {
        public $id, $email, $senha, $status_lembrar = false;

        public function authenticateLogin() {
            $dao = new LoginDAO();
            $dados_do_usuario = $dao->selectByUserForLogin($this);

            if($dados_do_usuario) {
                $_SESSION['usuario'] = $dados_do_usuario;
                if($this->status_lembrar) {
                    self::remember($this->email);
                }
                header("Location: /home");
            } else {
                header("Location: /login");
            }
        }

        private static function remember($user) {
            $validade = strtotime("+1 month");
            setcookie("funcionario_email", $user, $validade, "/", "", false, true);
        }

        /*private static function forget() {
            $validade = time() - 3600;
            setcookie("funcionario_user", "", $validade, "/", "", false, true);
        }*/
    }