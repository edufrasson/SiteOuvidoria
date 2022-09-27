<?php

namespace App\Model;
use App\DAO\BairroDAO;


class BairroModel{
    public $id, $nome, $data_cadastro;

    public function save() {
        $dao = new BairroDAO();
        return ($this->id == null) ? $dao->insert($this) : $dao->update($this);
    }

    public function delete(int $id) {
        $dao = new BairroDAO();
        $dao->delete($id);
    }

    public function getAllRows() {
        $dao = new BairroDAO();
        $this->arr_bairros = $dao->getAllRows();
    }

    public function getById(int $id) {
        $dao = new BairroDAO();
        $obj = $dao->getById($id);
        return ($obj) ? $obj : new BairroModel();
    }

    
}