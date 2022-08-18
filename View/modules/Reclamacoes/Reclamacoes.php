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
  <?php include "View/includes/cabecalho.php" ?>

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

    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Título</th>
            <th scope="col">Categoria</th>
            <th scope="col">Data Cadastro</th>
            <th scope="col">Status</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($arr_reclamacoes as $reclamacao): ?>
            <?php 
              $class_cor = "table-warning";
              if($reclamacao->status_reclamacao == "Abertos") {
                $class_cor = "table-success";
              } 
            ?>
            <tr>
              <th scope="row" class="<?= $class_cor ?>"><?= $reclamacao->id ?></th>
              <td class="<?= $class_cor ?>"><?= $reclamacao->titulo ?></td>
              <td class="<?= $class_cor ?>"><?= $reclamacao->categoria ?></td>
              <td class="<?= $class_cor ?>"><?= $reclamacao->data_cadastro ?></td>
              <td class="<?= $class_cor ?>"><?= $reclamacao->status_reclamacao ?></td>
              <td class="<?= $class_cor ?>">
              <?php if ($reclamacao->status_reclamacao == "Abertos") : ?>
                <a href="/responder?id=<?= $reclamacao->id ?>" class="btn btn-success">Responder</a>
                <?php endif ?>
                
                <?php if ($reclamacao->status_reclamacao == "Pendente") : ?>
                  <a href="/ver_resposta?id=<?= $reclamacao->id ?>" class="btn btn-primary">Ver resposta</a>
                <?php endif ?>
                <a href="/deletar?id=<?= $reclamacao->id ?>" class="btn btn-danger">Deletar</a>
              </td>
            </tr>
          <?php endforeach ?>
          <?php if(count($arr_reclamacoes) == 0): ?>
              <tr>
                  <td colspan="4">Nenhum funcionário encontrado.</td>
              </tr>
          <?php endif ?>
        </tbody>
      </table>
    </div>
  </main>

  <?php include 'View/includes/js_config.php' ?>
</body>

</html>