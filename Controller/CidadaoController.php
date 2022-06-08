<?php
    class CidadaoController extends Controller {

        public static function listarCidadao() {
            parent::isAuthenticated();
            $model = new CidadaoModel();
            $model->getAllRows();

            include "./View/modules/Cidadao/listarCidadao.php";
        }
    }