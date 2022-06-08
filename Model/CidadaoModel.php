<?php
    class CidadaoModel {
        public $arr_cidadao;

        public function getAllRows() {
            $dao = new CidadaoDAO();
            $this->arr_cidadao = $dao->selectCidadao();
        }

        public function buscar($dados_busca){
            $dao = new CidadaoDAO();

            $this->arr_cidadao = $dao->buscar($dados_busca);
        }
    }