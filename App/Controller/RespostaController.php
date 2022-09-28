<?php

namespace App\Controller;
use App\Model\RespostaModel;
use App\Model\ReclamacaoModel;

class RespostaController extends Controller{
    public static function form(){
            
    }

    public static function ver(){
        parent::isAuthenticated();

        $model = new RespostaModel();
        $model_reclamacao = new ReclamacaoModel();

        if(isset($_GET['id']))
            $model->getById($_GET['id']);
        
        $reclamacao = $model_reclamacao->getById($_GET['id']);

        include './View/modules/Respostas/ResponderReclamacao.php';    
    }

    public static function save(){
        parent::isAuthenticated();

        $model_reclamacao = new ReclamacaoModel();
        $model_resposta = new RespostaModel();

        $model_resposta->descricao = $_POST['descricao'];
        $model_resposta->id_funcionario = $_SESSION['usuario']->id;
        $model_resposta->id_reclamacao = $_POST['id_reclamacao'];
        $model_resposta->save();

        $model_reclamacao->changeStatus($_POST['id_reclamacao'], 'P');
    }
}