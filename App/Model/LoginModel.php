<?php

namespace App\Model;
use App\DAO\LoginDAO;

class LoginModel
{
    public $id, $nome, $email, $senha, $status_lembrar = false;
    public $user_cookie;

    public function authenticateLogin()
    {
        $dao = new LoginDAO();
        $dados_do_usuario = $dao->selectByUserForLogin($this);

        if ($dados_do_usuario) {
            $_SESSION['usuario'] = $dados_do_usuario;
            if ($this->status_lembrar) {
                ($this->nome == null) ? $this->user_cookie = $this->email : $this->user_cookie = $this->nome;
                self::remember($this->nome);
            }
            header("Location: /home");
        } else {
            header("Location: /login");
        }
    }

    private static function remember($user)
    {
        $validade = strtotime("+1 month");
        setcookie("funcionario_user", $user, $validade, "/", "", false, true);
    }

    /*private static function forget() {
            $validade = time() - 3600;
            setcookie("funcionario_user", "", $validade, "/", "", false, true);
        }*/
}
