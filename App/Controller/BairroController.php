<?php 

namespace App\Controller;
use App\Model\BairroModel;


class BairroController extends Controller{
    public static function form() 
        {
            parent::isAuthenticated();

            $model = new BairroModel();

            if(isset($_GET['id'])) $model = $model->getById( (int) $_GET['id'] );           

            $model_bairro = new BairroModel();
            $model_bairro->getAllRows(); 

            include 'View/modules/Bairro/FormBairro.php';
        }

        public static function index() {
            parent::isAuthenticated();

            $model_bairro = new BairroModel();
            $model_bairro->getAllRows();            
        }

        public static function myAccount(){
            parent::isAuthenticated();

            parent::render('MeuPerfil/MeuPerfil');
        }

        public static function save() {
            $model = new BairroModel();
            $model->id = $_POST['id'];
            $model->nome = $_POST['nome'];
            $model->data_cadastro = $_POST['data_cadastro'];
           
            $model->save();

            header("Location: /bairro/listar");
        }

        public static function delete() {
            $model = new BairroModel();

            $model->delete( (int) $_GET['id'] );

            header("Location: /bairro/listar");
        }
}