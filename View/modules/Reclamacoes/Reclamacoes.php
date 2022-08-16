<!doctype html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="responderdenuncia.css">
  <?php include 'View/includes/css_config.php' ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./../../../View/css/reclamacoes.css">
  <title>Requerimentos - OuvidoriaJahu</title>
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
  <?php include "View/includes/cabecalho.php" ?>

  <!-- Main -->
  <main>
    <div class="container text-end">
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Filtrar
        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="nav-link text-dark" href="?filtrar=Abertos">Reclamações Abertas</a></li>
          <li><a class="nav-link text-dark" href="?filtrar=Pendente">Reclamações Pendentes</a></li>
          <li><a class="nav-link text-dark" href="?filtrar=Respondidos">Reclamações Respondidas</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="nav-link text-danger" href="/reclamacoes">Limpar Filtros</a></li>
        </ul>
      </div>
    </div>

    <div class="container flex">

      <?php foreach ($arr_reclamacoes as $reclamacao) : ?>
        <div class="card">
          <div class="card-header">
            <h1 class="title">
              <?= $reclamacao->titulo ?>
            </h1>

          </div>

          <div class="card-body">
            <h4 class="subtitle">
              <?= $reclamacao->categoria ?>
            </h4>
          </div>

          <div class="card-footer">
            <h5 class="status">
              Status: <?= $reclamacao->status_reclamacao ?>
            </h5>
            <hr class="hr">
            <div class="actions d-flex justify-content-between">
              <?php if ($reclamacao->status_reclamacao == "Abertos") : ?>
                <a href="/responder?id=<?= $reclamacao->id ?>" class="btn btn-success">Responder</a>
              <?php endif ?>

              <?php if ($reclamacao->status_reclamacao == "Pendente") : ?>
                <a href="/ver_resposta?id=<?= $reclamacao->id ?>" class="btn btn-primary">Ver resposta</a>
              <?php endif ?>
              <a href="/deletar?id=<?= $reclamacao->id ?>" class="btn btn-danger">Deletar</a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </main>

  <!--
      * Realizando a inclussão das configurações básica para o Bootstrap funcionar.
    -->
  <?php include 'View/includes/js_config.php' ?>
</body>

</html>