<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include 'View/includes/css_config.php' ?>
        <link rel="stylesheet" href="./../../../View/css/meuperfil.css">
        <title>Perfil <?= $_SESSION['usuario']->nome ?> - OuvidoriaJahu</title>
    </head>

    <body> 
        <!--
            * Realizando a inclusão de um arquivo externo de php, onde é responsavel por exibir o código HTML do
            cabeçalho da nossa página.
        -->
        <?php include "View/includes/cabecalho.php" ?>

        <!-- Main -->
        <main class="form-nome container" class="position-relative">  
            <form method="POST" action="" id="form-nome" class="row g-3 position-absolute top-50 start-50 translate-middle">
                <input type="hidden" value="<?= $id ?>" name="id-funcionario" />  
                <h1 class="text-center">Meu Perfil</h1>
                <div class="col-md-12">
                    <label for="nome-funcionario" class="form-label">Nome</label>
                    <fieldset disabled>
                        <input value="<?= $_SESSION['usuario']->nome ?>" name="nome-funcionario" type="text" class="form-control" id="nome-funcionario">
                    </fieldset>
                </div>
	            <div class="col-12">
	                <label for="email-funcionario" class="form-label">Email</label>
                    <fieldset disabled>
	                    <input value="<?= $_SESSION['usuario']->email ?>" name="email-funcionario" type="email" class="form-control" id="email-funcionario">
                    </fieldset>
	            </div>
                <div class="container px-3 py-4" id="senha">
                    <h4 class="text-center pb-2 border-bottom">Alterar senha</h4>
                </div>
                <div class="col-md-6">
                    <input name="nova-senha-funcionario" type="password" placeholder="Nova senha" class="form-control" id="nova-senha-funcionario">
                </div>
                <div class="col-md-6">
                    <input name="confirmar-senha-funcionario" type="password" placeholder="Confirmar Senha" class="form-control" id="confirmar-senha-funcionario">
                </div>
                <div class="col-md-6">
                    <input name="senha-antiga-funcionario" type="password" placeholder="Senha antiga" class="form-control" id="senha-funcionario">
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-outline-success">Alterar senha</button>
                </div>
            </form>
        </main>

        <!--
            * Realizando a inclussão das configurações básica para o Bootstrap funcionar.
        -->
        <?php include 'View/includes/js_config.php' ?> 
    </body>
</html> 