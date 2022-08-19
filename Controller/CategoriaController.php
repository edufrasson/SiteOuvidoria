<?php 

class CategoriaController extends Controller{
    public static function form() 
        {
            parent::isAuthenticated();

            $model = new CategoriaModel();

            if(isset($_GET['id'])) $model = $model->getById( (int) $_GET['id'] );

            parent::render('Categoria/FormCategoria', $model);
        }

        public static function index() {
            parent::isAuthenticated();

            $model = new CategoriaModel();
            $model->getAllRows();

            include './View/modules/Categoria/ListarCategoria.php';
        }     

        public static function save() {
            $model = new CategoriaModel();
            $model->id = $_POST['id'];
            $model->descricao = $_POST['descricao'];           
           
            $model->save();

            header("Location: /categoria/listar");
        }

        public static function delete() {
            $model = new CategoriaModel();

            $model->delete( (int) $_GET['id'] );

            header("Location: /categoria/listar");
        }
}