<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./../../../View/css/global.css" rel="stylesheet">
        <link href="./../../../View/css/cadastrarfuncionario.css" rel="stylesheet">
        <?php include 'View/includes/css_config.php' ?>
        <title>Cadastrar Categoria - OuvidoriaJahu</title>
    </head>

    <body>
        <header>
            <?php include 'View/includes/cabecalho.php' ?>
        </header>
        <br>
        <main class="container">
            <h2>Cadastro de Categorias: </h2>
            <form class="form" action="/categoria/salvar" method="POST">                
                <input class="form-control" type="hidden" value="<?= $model->id ?>" name="id" />

                <label for="descricao">Descrição da Categoria: </label>
                <input class="form-control" name="descricao" value="<?= $model->descricao ?>" type="text" >
                 <br>                 
                <input class="btn btn-primary" type="submit" value="Salvar">
            </form>
        </main>
        <?php include 'View/includes/js_config.php' ?>
    </body>
</html>