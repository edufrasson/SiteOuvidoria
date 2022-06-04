<?php
    class LoginController extends Controller {
        
        public static function form() {
            $usuario = (isset($_COOKIE['funcionario_user'])) ? $_COOKIE['funcionario_user'] : "";
            include "./View/modules/Login/Login.php";
            //parent::render("Login/Login");
        }

        public static function esqueciSenha() {
            parent::render("Login/esqueci-senha");
        }

        public static function enviarNovaSenha() {

            try {
                $dao = new LoginDAO();

                $nova_senha = uniqid();
                $email = $_POST['email'];
                $assunto = "Nova Senha do OuvidoriaJahu!";
                $mensagem = "Sua nova senha foi redefinida para: $nova_senha";
                $dao->setNewPasswordForUserByEmail($email, $nova_senha);

                $retorno = "Caso seu email esteja em nosso sistema, você acabou de receber uma nova senha.";
    
                if(!mail($email, $assunto, $mensagem))
                    throw new Exception("Desculpe, ocorreu um erro ao tentar enviar o email. Senha gerada: $nova_senha");
            } catch (Exception $err) {
                $retorno = $err->getMessage();
            }

            include "./View/modules/Login/esqueci-senha.php";
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