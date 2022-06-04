<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'View/includes/css_config.php' ?>

        <title>Esqueci minha Senha - Ouvidoria Jahu</title>
    </head>

    <body>
    <main class="container flex">
        <div class="form-signin flex">
            <form action="/enviar-nova-senha" method="POST">
                <h1 class="h3 mb-3 fw-normal">Esqueceu sua senha?</h1>
                <p>Não tem problema! Só precisamos que você informe o email que utiliza para logar em sua conta normalmente, e iremos redeefinir sua senha.</p>

                <div class="col-md-12">
                    <input name="email-username" type="text" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <br>
                <button type="submit" class="btn btn-lg btn-primary">Enviar nova Senha</button>  <a href="/login">Voltar</a>
            </form>
        </div>
    </main>
    </body>
</html>