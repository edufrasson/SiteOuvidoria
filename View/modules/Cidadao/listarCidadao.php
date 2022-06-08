<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./../../../View/css/global.css" rel="stylesheet">
        <?php include 'View/includes/css_config.php' ?>
        <title>Gerenciar Cidadãos - OuvidoriaJahu</title>
    </head>

    <body>
        <header>
            <?php include 'View/includes/cabecalho.php' ?>
        </header>

        <main class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NOME</th>
                        <th scope="col">CPF</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">TELEFONE</th>
                        <th scope="col">SEXO</th>
                        <th scope="col">DATA DO CADASTRO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($model->arr_cidadao as $item) : ?>
                        <tr>
                            <td><?= $item->nome ?></td>
                            <td><?= $item->cpf ?></td>
                            <td><?= $item->email ?></td>
                            <td><?= $item->telefone ?></td>
                            <td><?= ($item->sexo == "F" || $item->sexo == "f") ? "Feminino" : "Masculino" ?></td>
                            <td><?= $item->data_cadastro ?></td>
                        </tr>
                    <?php endforeach ?>
                    <?php if (count($model->arr_cidadao) == 0) : ?>
                        <tr>
                            <td colspan="4">Nenhum cidadão encontrado.</td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </main>

        <?php include 'View/includes/js_config.php' ?>
    </body>
</html>