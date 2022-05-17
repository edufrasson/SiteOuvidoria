<?php

class ReclamacaoModel{
    public $id, $descricao, $titulo, $latitude, $longitude;
    public $data_cadastro, $categoria, $status_reclamacao;

    public function getAll(){
        $dao = new ReclamacaoDAO();

        return $dao->getAllRows();
    }

    public function getById($id){
        $dao = new ReclamacaoDAO();

        return $dao->getById($id);
    }
}