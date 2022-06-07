<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico - OuvidoriaJahu</title>
    <?php include 'View/includes/css_config.php' ?>
</head>

<body>
    <header>
        <?php include 'View/includes/cabecalho.php' ?>
    </header>

    <main class="container">
        <table class="table">
            <thead>
                <th col="span">ID</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Status</th>
                <th>Latitude e Longitude</th>
                <th>Data de Cadastro</th>
            </thead>
            <tbody>
                <?php foreach ($reclamacao as $reclamacao) : ?>
                    <tr>
                        <td><?= $reclamacao->id ?></td>
                        <td><?= $reclamacao->titulo ?></td>
                        <td><?= $reclamacao->categoria ?></td>
                        <td><?= $reclamacao->status_reclamacao ?></td>
                        <td><?= $reclamacao->latitude ?> / <?= $reclamacao->longitude ?></td>
                        <td><?= $reclamacao->data_cadastro ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>

    <?php include 'View/includes/js_config.php' ?>
</body>

</html>