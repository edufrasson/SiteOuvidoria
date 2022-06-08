<?php
    class CidadaoController extends Controller {

        public static function listarCidadao() {
            parent::isAuthenticated();
            $model = new CidadaoModel();
            $model->getAllRows();

            include "./View/modules/Cidadao/listarCidadao.php";
        }

        public static function buscar(){
            parent::isAuthenticated();
            $model = new CidadaoModel();
            if(isset($_GET['query']))
                $model->buscar($_GET['query']);

            include "./View/modules/Cidadao/listarCidadao.php";    
        }
    }