<!doctype html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="./../../../View/css/respondersugestao.css">
        <?php include 'View/includes/css_config.php' ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Responder Sugestões - OuvidoriaJahu</title>
        <script>
            tinymce.init({
                selector: 'textarea#responder-sugestao',
                plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
                toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
                toolbar_mode: 'floating',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
            });
        </script>
    </head>

    <body>
        <!--
            * Realizando a inclusão de um arquivo externo de php, onde é responsavel por exibir o código HTML do
            cabeçalho da nossa página.
        -->
        <?php include "View/includes/cabecalho.php" ?>

        <main>
            <form class="form-dados-sugestao">
                <h2>Sugestão <span class="badge bg-success">Novo</span></h2>
                <fieldset disabled>
                    <input type="text" class="form-control" id="cidadao" placeholder="name@example.com" value="Nome/Endereço: João da Silva Sampaio, 53. - Jardim Maria Cibele - Rua Amaral Orthega ">
                    <div id="requerimento" class="form-floating">
                        <textarea class="form-control" id="requerimento" style="height: 100px">Motivo: Bom dia. Gostaria de sugerir uma melhora em relação a segurança residencial dos bairros correspondentes ao aumento do índice de violência e crimes.</textarea>
                    </div>
                </fieldset>
                <fieldset disabled>
                    <div class="mb-3">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Status: Pendente">
                    </div>
                </fieldset>
            </form>
            <form class="form-responder">
                <div class="container px-3 py-4" id="historicos">
                    <h2 class="pb-2 border-bottom">Resposta (Adicionar Informações)</h2>
                </div>
                <div id="requerimento" class="form-floating">
                    <textarea class="form-control" id="responder-sugestao" style="height: 100px"></textarea>
                </div>
                <button type="button" class="btn btn-primary btn-lg" id="liveToastBtn">Notificar Usuário</button>
                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="..." class="rounded me-2" alt="...">
                            <strong class="me-auto">Bootstrap</strong>
                            <small>11 mins ago</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Hello, world! This is a toast message.
                        </div>
                    </div>
                </div>
                <a href="http://memoria.bn.br/pdf/008567/per008567_1927_00108.pdf" role="button" class="btn btn-success btn-lg">Prosseguir (Impressão)</a></center>
            </form>
        </main>

    <!--
      * Realizando a inclussão das configurações básica para o Bootstrap funcionar.
    -->
    <?php include 'View/includes/js_config.php' ?> 
  </body>
</html>