<?php 

class BairroController extends Controller{
    public static function form() 
        {
            parent::isAuthenticated();

            $model = new BairroModel();

            if(isset($_GET['id'])) $model = $model->getById( (int) $_GET['id'] );

            parent::render('Bairro/FormBairro', $model);
        }

        public static function index() {
            parent::isAuthenticated();

            $model = new BairroModel();
            $model->getAllRows();

            include './View/modules/Bairro/ListarBairro.php';
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