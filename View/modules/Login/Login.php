<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./../../../View/css/login.css" rel="stylesheet">
    <?php include 'View/includes/css_config.php' ?>
    <title>Login - Ouvidoria Jahu</title>
</head>

<body class="text-center flex">
    <main class="container flex">
        <div class="form-signin flex">
            <form>
                <img class="mb-4" src="./../../View/img/logo.png" alt="" width="100" height="100">
                <h1 class="h3 mb-3 fw-normal">Ouvidoria Jahu - Login</h1>

                <div class="form-floating" class="col-md-6 offset-md-3">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="floatingInput">Email ou Telefone</label>
                </div>
                <br>
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
    <?php include 'View/includes/js_config.php' ?>
</body>

</html>