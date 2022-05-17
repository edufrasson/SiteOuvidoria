<?php

class ReclamacaoController extends Controller {
    public static function index(){
        parent::isAuthenticated();

        $model = new ReclamacaoModel();
        $arr_reclamacoes = $model->getAll();     

        include './View/modules/Reclamacoes/Reclamacoes.php';
    }   
}