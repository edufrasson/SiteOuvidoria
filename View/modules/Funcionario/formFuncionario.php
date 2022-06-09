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
        <main class="container-sm d-flex justify-content-center">
            <form class="form" action="/funcionario/salvar" method="POST">
                <?php $titulo = (!isset($_GET['id']) ? "Cadastro de Funcionário" : "Atualizar Funcionário") ?>
                <h1><?= $titulo ?></h1>
                <input class="form-control" type="hidden" value="<?= $model->id ?>" name="id" />
                <label for="nome">Nome</label><br>
                <input class="form-control" name="nome" value="<?= $model->nome ?>" type="text" > <br>

                <label for="email">E-mail</label><br>
                <input class="form-control" name="email" value="<?= $model->email ?>" type="email"><br>

                <?php if(!isset($_GET['id'])): ?>
                    <label for="senha">Senha</label><br>
                    <input class="form-control" name="senha" type="password" ><br>
                <?php endif ?>
                
                <?php $msg = (!isset($_GET['id'])) ? "Cadastrar" : "Atualizar" ?>
                <button class="btn btn-primary"type="submit" ><?= $msg ?></button>
            </form>
        </main>
        <?php include 'View/includes/js_config.php' ?>
    </body>
</html>