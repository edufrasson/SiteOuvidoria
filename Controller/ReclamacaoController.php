<?php

class ReclamacaoController extends Controller
{
    public static function index()
    {
        parent::isAuthenticated();

        $model = new ReclamacaoModel();

        if(isset($_GET['filtrar'])) {           
            $arr_reclamacoes = $model->getAllByStatus($_GET['filtrar']);
            include './View/modules/Reclamacoes/Reclamacoes.php';          
        }else{
            $arr_reclamacoes = $model->getAll();
            include './View/modules/Reclamacoes/Reclamacoes.php';
        }        
    }

    public static function responder()
    {
        parent::isAuthenticated();

        $model = new ReclamacaoModel();

        if (isset($_GET['id']))
            $reclamacao = $model->getById($_GET['id']);

        include './View/modules/Respostas/ResponderReclamacao.php';
    }

    public static function historico(){
        parent::isAuthenticated();

        $model = new ReclamacaoModel();

        $reclamacao = $model->getAll();

        include './View/modules/Historico/Historico.php';
    }

    public static function buscar(){
        $model = new ReclamacaoModel();
        if(isset($_GET['query']))
            $arr_reclamacoes = $model->buscar($_GET['query']);
        
        include './View/modules/Reclamacoes/Reclamacoes.php';    
    }

    public static function delete(){
        parent::isAuthenticated();

        $model = new ReclamacaoModel();
        (isset($_GET['id'])) ? $model->delete($_GET['id']) : header("Location: /reclamacoes");

        header("Location: /reclamacoes");
    }
}
