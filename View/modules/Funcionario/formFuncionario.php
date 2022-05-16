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