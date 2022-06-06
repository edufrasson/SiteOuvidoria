<!doctype html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="responderdenuncia.css">
  <?php include 'View/includes/css_config.php' ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./../../../View/css/responderdenuncia.css">
  <title>Responder Denúncia - OuvidoriaJahu</title>
  
</head>

<body>
  <!--
      * Realizando a inclusão de um arquivo externo de php, onde é responsavel por exibir o código HTML do
        cabeçalho da nossa página.
    -->
  <?php include "View/includes/cabecalho.php" ?>

  <!-- Main -->
  <main>


    <img src="./../../View/img/logo.png" alt="mdo" width="52" height="52" class="d-inline-block align-text-top">
    <form class="form-dados-denuncia">
    

      <h2>Denúncia <span class="badge bg-danger">Novo</span></h2>
      <fieldset disabled>
        <input type="text" class="form-control" id="cidadao" placeholder="name@example.com" value="<?= $reclamacao->titulo ?>">
        <div id="requerimento" class="form-floating">
          <textarea class="form-control" id="requerimento" style="height: 100px"><?= $reclamacao->descricao ?></textarea>
        </div>
      </fieldset>
      <fieldset disabled>
        <div class="mb-3">
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Status: <?= $reclamacao->status_reclamacao ?>">
        </div>
      </fieldset>
    </form>
    <form class="form-responder" action="/resposta/save" method="POST">
      <input type="hidden" name="id" class="form-control" value="<?= (isset($dados_resposta)) ? $dados_resposta->id : "" ?>"> 
      <input type="hidden" value="'<?= $_GET['id'] ?>" name="id_reclamacao">     
      <div class="container px-3 py-4" id="historicos">
        <h2 class="pb-2 border-bottom">Resposta (Adicionar Informações)</h2>
      </div>
      <div id="requerimento" class="form-floating">        
        <textarea class="form-control mb-3" id="responder-denuncia" name="descricao" style="height: 300px">
          <?= (isset($dados_resposta)) ? $dados_resposta->descricao : "" ?>
        </textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-lg" id="liveToastBtn">Notificar Usuário</button>
     
      <a href="http://memoria.bn.br/pdf/008567/per008567_1927_00108.pdf" role="button" class="btn btn-success btn-lg">Prosseguir (Impressão)</a>
    </form>
  </main>

  <!--
      * Realizando a inclussão das configurações básica para o Bootstrap funcionar.
    -->
  <?php include 'View/includes/js_config.php' ?>
</body>

</html>