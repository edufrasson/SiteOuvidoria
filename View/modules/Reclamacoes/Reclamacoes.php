<?php
    session_start();

    if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])) {
        $id = $_SESSION['usuario'][0];
        $nome = $_SESSION['usuario'][1];
        $email = $_SESSION['usuario'][2];
        $senha = $_SESSION['usuario'][3];
    } else {
        header("Location: /login");
    }

    if(isset($_GET['sair'])) {
        unset($_SESSION['usuario']);
        header("Location: /login");
    }
?>

<!doctype html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="responderdenuncia.css">
  <?php include 'View/includes/css_config.php' ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./../../../View/css/reclamacoes.css">
  <title>Resquerimentos - OuvidoriaJahu</title>
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
    <div class="container flex">
      <?php foreach ($arr_reclamacao as $reclamacao) : ?>
        <div class="card">
          <div class="card-header">
            <h1 class="title">
              <?= $reclamacao->titulo?>
            </h1>
            <h4 class="subtitle">
              <?= $reclamacao->categoria?>
            </h4>
          </div>

          <div class="card-body">
            <p>
              <?= $reclamacao->descricao?>
            </p>
          </div>

          <div class="card-footer">
            <h5 class="status">
              <?= $reclamacao->status_reclamacao?>
            </h5>
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