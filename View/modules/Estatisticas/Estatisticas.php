<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Estatísticas - OuvidoriaJahu</title>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
   <?php include 'Script/google_charts.php'?>

<?php include 'View/includes/css_config.php'?>
</head>
<body>
    <header>
        <?php include 'View/includes/cabecalho.php'?>
    </header>
<div class="container-fluid">
    <div id="columnchart1" style="width: 50%; height: 500px;"></div>
    <div id="columnchart2" style="width: 50%; height: 500px;"></div>
</div>
<?php include 'View/includes/js_config.php'?>
</body>
</html>