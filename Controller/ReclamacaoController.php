<?php

class ReclamacaoController{
    public static function index(){
        $model = new ReclamacaoModel();

        $arr_reclamacao = $model->getAll();

        include 'View/modules/Reclamacoes/Reclamacoes.php';
    }   
}