<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- configuração CSS -->
    <?php include 'View/includes/css_config.php' ?>
    <link href="View/css/home.css" rel="stylesheet">      

    <title>Seja Bem Vindo <?= $_SESSION['usuario']->nome ?> - OuvidoriaJahu</title>
</head>

<body>
    <header>
        <?php include 'View/includes/cabecalho.php' ?>
    </header>
    <main>
        <section>
            <!-- CARROSSEL -->
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <!-- ITEM 1 -->
                        <div class="carousel-item active">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#777" />
                            </svg>
                            <img src="#" alt="imagem-item-1" width="52" height="52" class="d-inline-block align-text-top">

                            <div class="container">
                                <div class="carousel-caption text-start ">
                                    <h1>Bem Vindo(a).</h1>
                                    <p>Acesse o site de Jaú para mais informações.</p>
                                    <p><a class="btn btn-lg btn-primary" href="https://www.jau.sp.gov.br/fale-conosco">Acessar</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- / ITEM 1 -->

                        <!-- ITEM 2 -->
                        <div class="carousel-item">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#777" />
                            </svg>
                            <img src="#" alt="imagem-item-1" width="52" height="52" class="d-inline-block align-text-top">

                            <div class="container">
                                <div class="carousel-caption ">
                                    <h1>App Ouvidoria Jaú.</h1>
                                    <p>Agora disponível para Android e IOS.</p>
                                    <p><a class="btn btn-lg btn-primary" href="https://play.google.com/store/apps/details?id=com.w5.ouvidoria.ouvidoriajahu">Acessar página
                                        </a></p>
                                </div>
                            </div>
                        </div>
                        <!-- / ITEM 2 -->

                        <!-- ITEM 3 -->
                        <div class="carousel-item">
                            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#777" />
                            </svg>
                            <img src="#" alt="imagem-item-1" width="52" height="52" class="d-inline-block align-text-top">

                            <div class="container">
                                <div class="carousel-caption text-end ">
                                    <h1>Agradecimentos.</h1>
                                    <p>Etec Jaú, FATEC e Fundação - alunos entre 15 a 18 anos.</p>
                                    <p><a class="btn btn-lg btn-primary" href="http://www.etecjau.com.br/etecjau/">Saiba Mais</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- /ITEM 3 -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
             <!-- / CARROSSEL -->
        </section>
       
        <br>
        <!-- GRID DOS SERVIÇOS-->  
            <section>
                <div class="container marketing">              
                    <div class="row">
                        <!-- Coluna RESPONDER-->
                        <div class="col-lg-4 align-self-center">
                            <span class="iconify icon" data-icon="bx:message-detail"></span>
                            <br><br>

                            <h2>Responder <span class="badge bg-success">Novo</span></h2>
                            <p>Próximo requerimento (ordenado por urgência).</p>
                            <p><a class="btn btn-primary" href="/reclamacoes">Expandir &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->

                        <!-- Coluna HISTÓRICO-->
                        <div class="col-lg-4 align-self-center">
                            <span class="iconify icon" data-icon="bi:journal-bookmark"></span>
                            <br><br>

                            <h2>Histórico</h2>
                            <p>Todos os requerimentos registrados.</p>
                            <p><a class="btn btn-primary" href="..\..\SiteOuvidoriaJau\Historico\TelaHistorico.html">Expandir &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->

                        <!-- Coluna ESTATÍSTICAS-->
                        <div class="col-lg-4 align-self-center">
                            <span class="iconify icon" data-icon="bi:clipboard-data"></span>
                            <br><br>

                            <h2>Estatísticas</h2>
                            <p>Movimento, tráfego e disposição de dados.</p>
                            <p><a class="btn btn-primary" href="..\..\SiteOuvidoriaJau\Estatisticas\TelaEstatisticas.html">Expandir &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->

                    </div><!-- /.row -->
                </div>
            </section>
        <!-- /GRID DOS SERVIÇOS-->   
        <br><br>           
        <!-- FOOTER -->    
            <footer>
                <?php include 'View/includes/rodape.php'; ?>
            </footer>
        <!-- / FOOTER -->   
    </main>
    <?php include 'View/includes/js_config.php'; ?>
</body>
</html>