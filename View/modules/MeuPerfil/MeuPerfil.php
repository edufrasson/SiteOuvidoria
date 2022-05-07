<!--
    * Anotações:
        O Layout do site está quebrando em 992x708
-->
<html>
    <head>
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include '../../includes/css_config.php' ?>
        <title>Meu Perfil - OuvidoriaJahu</title>
        <link rel="stylesheet" href="./../../css/meuperfil.css">
    </head>

    <body> 
        <?php include "../../includes/cabecalho.php" ?>
        <main class="form-nome container" class="position-relative">  
            <form method="POST" action="" id="form-nome" class="row g-3 position-absolute top-50 start-50 translate-middle">
                <h1> Meu Perfil</h1>
                <div class="col-md-6">
                    <label for="Nome_Funcionario" class="form-label">Nome</label>
                    <fieldset>
                        <input type="text" class="form-control" id="Nome_Funcionario">
                    </fieldset>
                </div>
	            <div class="col-md-6">
	                <label for="Sobrenome_Funcionario" class="form-label">Sobrenome</label>
                    <fieldset>
	                    <input type="text" class="form-control" id="Sobrenome_Funcionario">
                    </fieldset>
	            </div>
	            <div class="col-12">
	                <label for="Email_Funcionario" class="form-label">Email</label>
                    <fieldset>
	                    <input type="email" class="form-control" id="Email_Funcionario">
                    </fieldset>
	            </div>
                <div class="container px-3 py-4" id="senha">
                    <h4 class="pb-2 border-bottom">Alterar senha</h4>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="NovaSenha" placeholder="Nova senha...">
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="ConfirmarNovasenha" placeholder="Confirme sua nova senha...">
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="Senha_Funcionario" placeholder="Digite sua senha antiga...">
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-outline-success">Alterar Senha</button>
                </div>
            </form>
        </main>	
        <?php include '../../includes/js_config.php' ?> 
    </body>
</html> 