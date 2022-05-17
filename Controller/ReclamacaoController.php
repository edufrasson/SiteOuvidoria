<?php

class ReclamacaoController extends Controller {
    public static function index(){
        parent::isAuthenticated();

        $model = new ReclamacaoModel();
        $arr_reclamacao = $model->getAll();

        parent::render("Reclamacoes/Reclamacoes");
    }   
}