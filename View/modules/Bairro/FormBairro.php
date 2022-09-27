<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./../../../View/css/global.css" rel="stylesheet">
        <link href="./../../../View/css/cadastrarfuncionario.css" rel="stylesheet">
        <?php include 'View/includes/css_config.php' ?>
        <title>Cadastrar Bairro - OuvidoriaJahu</title>
    </head>

    <body>
        <header>
            <?php include 'View/includes/cabecalho.php' ?>
        </header>
        <br>
        <!-- Form -->
        <main class="container">
            <h2>Cadastro de Bairros: </h2>
            <form class="form" action="/bairro/salvar" method="POST">                
                <input class="form-control" type="hidden" value="<?= $model->id ?>" name="id" />

                <label for="nome">Nome do Bairro: </label>
                <input class="form-control" name="nome" value="<?= $model->nome ?>" type="text" >
                 <br>                 
                <input class="btn btn-primary" type="submit" value="Salvar">
            </form>
        </main>
        <br>

        <!-- List -->
        <main class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data de Cadastro</th>
                    <th scope="col">Ação</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach($model_bairro->arr_bairros as $item): ?>
                        <tr>
                            <th scope="row"><?= $item->id ?></th>
                            <td><?= $item->nome ?></td>
                            <td><?= $item->data_cadastro ?></td>
                            <td><a href="/bairro/delete?id=<?= $item->id ?>">X</a> <a href="/bairro/form?id=<?= $item->id ?>">Editar</a></td>
                        </tr>
                    <?php endforeach ?>
                    <?php if(count($model_bairro->arr_bairros) == 0): ?>
                        <tr>
                            <td colspan="4">Nenhum funcionário encontrado.</td>
                        </tr>
                    <?php endif ?>
              </tbody>
            </table>
        </main>
        <?php include 'View/includes/js_config.php' ?>
    </body>
</html>