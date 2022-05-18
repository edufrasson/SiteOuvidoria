<?php

class RespostaController extends Controller{
    public static function form(){
            
    }

    public static function index(){

    }

    public static function save(){
        $model = new RespostaModel();

        $model->descricao = $_POST['descricao'];
        $model->id_funcionario = $_SESSION['usuario']->id;
        $model->id_reclamacao = $_POST['id_reclamacao'];
        $model->save();
    }
}