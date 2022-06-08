<?php
    class CidadaoModel {
        public $arr_cidadao;

        public function getAllRows() {
            $dao = new CidadaoDAO();
            $this->arr_cidadao = $dao->selectCidadao();
        }
    }