<!doctype html>
<html lang="pt-br">
  <head>
    <script src="https://cdn.tiny.cloud/1/anrdpu30423fv0s3ykro7pdjmzcuip9j310uvludco6r8s6g/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="./../../css/responderdenuncia.css">
    <?php include '../../includes/css_config.php' ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responder Denúncia - OuvidoriaJahu</title>
    <script>
      tinymce.init({
        selector: 'textarea#responder-denuncia',
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
    <?php include "../../includes/cabecalho.php" ?>

    <!-- Main -->
    <main>
      <form class="form-dados-resposta">
        <h2>Denúncia <span class="badge bg-danger">Novo</span></h2>
        <fieldset disabled>
          <input type="text" class="form-control" id="cidadao" placeholder="name@example.com" value="Nome/Endereço: Rafaela Bastos, 19. - Jardim Maria Cibele - Rua Amaral Orthega ">
          <div id="requerimento" class="form-floating">
            <textarea class="form-control" id="requerimento" style="height: 100px">Motivo: Trata-se de alguns indivíduos que realizam festas próximos a residências com som alto, o que atrapalha muitos moradores. Gostaria que checassem, grata!</textarea>
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
          <textarea class="form-control" id="responder-denuncia" style="height: 100px"></textarea>
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
        <a href="http://memoria.bn.br/pdf/008567/per008567_1927_00108.pdf" role="button" class="btn btn-success btn-lg">Prosseguir (Impressão)</a>
      </form>
    </main>
    
    <!--
      * Realizando a inclussão das configurações básica para o Bootstrap funcionar.
    -->
    <?php include '../../includes/js_config.php' ?> 
  </body>
  
</html>