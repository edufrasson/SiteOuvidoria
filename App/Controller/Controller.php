<?php

namespace App\Controller;

abstract class Controller
{
    protected static function isAuthenticated()
    {
        if(!isset($_SESSION['usuario']))
            header("Location: /login");
    }

    protected static function render($view, $model = null)
    {
        $arquivo = "./View/modules/$view.php";

        if(file_exists($arquivo))
            include  $arquivo;
        else 
            echo "arquivo não encontrado. Caminho: " . $arquivo;       
    }


}