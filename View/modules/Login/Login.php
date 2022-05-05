<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../css/login.css" rel="stylesheet">
    <?php include '../../includes/css_config.php' ?>
    <title>Login</title>
</head>

<body class="text-center">
    <main class="container">
        <div class="form-signin">
            <form>
                <img class="mb-4" src="..\..\SiteOuvidoriaJau\imagens\brasaojahu.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 fw-normal">Ouvidoria Jaú - Login</h1>

                <div class="form-floating" class="col-md-6 offset-md-3">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="floatingInput">Email ou Telefone</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="Senha" placeholder="Password">
                    <label for="floatingPassword">Senha</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembre de mim
                    </label>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Entrar</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
            </form>
        </div>
    </main>
    <?php include '../../includes/js_config.php' ?>
</body>

</html>