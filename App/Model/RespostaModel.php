<?php

namespace App\Model;
use App\DAO\RespostaDAO;

class RespostaModel{
    public $id, $id_funcionario, $id_reclamacao;
    public $descricao, $data_cadastro;

    public function save(){
        $dao = new RespostaDAO();

        ($this->id == null) ? $dao->insert($this) : $dao->update($this);
    }

    public function getById($id){
        $dao = new RespostaDAO();

        return $dao->getById($id);
    }
}