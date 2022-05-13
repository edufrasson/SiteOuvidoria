<?php
    session_start();

    if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])) {
        $id = $_SESSION['usuario'][0];
        $nome = $_SESSION['usuario'][1];
        $email = $_SESSION['usuario'][2];
        $senha = $_SESSION['usuario'][3];
    } else {
        header("Location: /login");
    }

    if(isset($_GET['sair'])) {
        unset($_SESSION['usuario']);
        header("Location: /login");
    }
?>

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
        <main>
            <form action="/funcionario/salvar" method="POST">
                <input type="hidden" value="<?= $model->id ?>" name="id-funcionario" />
                <input name="nome-funcionario" value="<?= $model->nome ?>" type="text" placeholder="Nome do Funcionário...">
                <input name="email-funcionario" value="<?= $model->email ?>" type="email" placeholder="Email do Funcionário...">
                <input name="senha-funcionario" type="password" placeholder="Senha do Funcionário...">
                <input type="submit" value="Cadastrar Funcionário">
            </form>
        </main>
        <?php include 'View/includes/js_config.php' ?>
    </body>
</html>