<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./../../../View/css/global.css" rel="stylesheet">
        <link href="./../../../View/css/cadastrarfuncionario.css" rel="stylesheet">
        <?php include 'View/includes/css_config.php' ?>
        <title>Cadastrar Funcionário - OuvidoriaJahu</title>
    </head>

    <body>
        <header>
            <?php include 'View/includes/cabecalho.php' ?>
        </header>
        <br>
        <main class="container">
            <form class="form" action="/bairro/salvar" method="POST">                
                <input class="form-control" type="hidden" value="<?= $model->id ?>" name="id" />

                <label for="nome">Nome do Bairro: </label>
                <input class="form-control" name="nome" value="<?= $model->nome ?>" type="text" >
                 <br>                 
                <input class="btn btn-primary" type="submit" value="Salvar">
            </form>
        </main>
        <?php include 'View/includes/js_config.php' ?>
    </body>
</html>