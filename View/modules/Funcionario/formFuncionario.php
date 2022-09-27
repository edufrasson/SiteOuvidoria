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
    <main class="container"><br>
        <form class="form" action="/funcionario/salvar" method="POST">

            <h2>Cadastro de Funcionários: </h2>

            <input class="form-control" type="hidden" value="<?= $model->id ?>" name="id-funcionario" />

            <label for="nome-funcionario">Nome do funcionario</label>
            <input class="form-control" name="nome-funcionario" value="<?= $model->nome ?>" type="text"><br>

            <label for="email-funcionario">E-mail do funcionario</label>
            <input class="form-control" name="email-funcionario" value="<?= $model->email ?>" type="email"><br>

            <label for="senha-funcionario">Senha do funcionario</label>
            <input class="form-control" name="senha-funcionario" type="password"><br>

            <input class="btn btn-primary" type="submit" value="Cadastrar Funcionário">
        </form>
    </main><br>
    <main class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">AÇÃO</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach($model_funcionario->arr_funcionarios as $item): ?>
                        <tr>
                            <th scope="row"><?= $item->id ?></th>
                            <td><?= $item->nome ?></td>
                            <td><?= $item->email ?></td>
                            <td><a href="/funcionario/delete?id=<?= $item->id ?>">X</a> <a href="/funcionario/form?id=<?= $item->id ?>">Editar</a></td>
                        </tr>
                    <?php endforeach ?>
                    <?php if(count($model_funcionario->arr_funcionarios) == 0): ?>
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