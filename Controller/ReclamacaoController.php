<?php

class ReclamacaoController extends Controller {
    public static function index(){
        parent::isAuthenticated();

        $model = new ReclamacaoModel();
        $arr_reclamacoes = $model->getAll();     

        include './View/modules/Reclamacoes/Reclamacoes.php';
    }   

    public static function responder(){        
        $model = new ReclamacaoModel();

        if(isset($_GET['id']))
            $reclamacao = $model->getById($_GET['id']);

        include './View/modules/Respostas/ResponderReclamacao.php';        
    }
}