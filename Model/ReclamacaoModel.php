<?php

class ReclamacaoModel{
    public $id, $descricao, $titulo, $latitude, $longitude;
    public $data_cadastro, $categoria, $status_reclamacao;

    public function changeStatus($id, $status){
        $dao = new ReclamacaoDAO();

        $dao->changeStatus($id, $status);
    }

    public function buscar($dados_busca){
        $dao = new ReclamacaoDAO();

        return $dao->buscar($dados_busca);
    }
    
    public function getAll(){
        $dao = new ReclamacaoDAO();

        return $dao->getAllRows();
    }

    public function getAllByStatus($status){
        $dao = new ReclamacaoDAO();

        return $dao->getAllByStatus($status);
    }

    public function getById($id){
        $dao = new ReclamacaoDAO();

        return $dao->getById($id);
    }

    public function delete($id){
        $dao = new ReclamacaoDAO();

        $dao->delete($id);
    }
}