<?php

namespace App\Model;
use App\DAO\CategoriaDAO;

class CategoriaModel{
    public $id, $descricao, $data_cadastro;

    public function save() {
        $dao = new CategoriaDAO();
        return ($this->id == null) ? $dao->insert($this) : $dao->update($this);
    }

    public function delete(int $id) {
        $dao = new CategoriaDAO();
        $dao->delete($id);
    }

    public function getAllRows() {
        $dao = new CategoriaDAO();
        $this->arr_categorias = $dao->getAllRows();
    }

    public function getById(int $id) {
        $dao = new CategoriaDAO();
        $obj = $dao->getById($id);
        return ($obj) ? $obj : new CategoriaModel();
    }

    
}