<?php

class EstatisticaController{
    public static function index(){
        $dao = new ReclamacaoDAO();

        $data = $dao->getCountByStatus();

        include 'View/modules/Estatisticas/Estatisticas.php';
    }
}