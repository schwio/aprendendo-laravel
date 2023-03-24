<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WikiMarvel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="/css/estilo.css">

        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body class="colorMarvel">
    <header> <!-- Início Navbar-->
        <nav class="navbar navbar-expand-sm colorMarvel">
            <div class="container">
                <a href="./index.html" class="navbar-brand">
                    <img src="img/logo_marvel_resized.png" alt="logo" class="">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
                </button>

                <div class="collapse navbar-collapse" id="nav-principal">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link active text-light font-weight-bold">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light">Filmes</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-light">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a href="./criacao_personagem.html" class="nav-link text-light">Personagens</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.html" class="btn btn-outline-light ml-4">Entrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> <!-- Fim Navbar -->

    <section id="home"> <!-- Início da Sessão-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 d-flex">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                          <div class="carousel-item active">
                            <div class="img"><img class="d-block img-fluid" src="./img/carousel/carousel-img1.png" alt="First slide"></div>
                          </div>
                          <div class="carousel-item">
                            <div class="img"><img class="d-block img-fluid" src="./img/carousel/carousel-img1.png" alt="Second slide"></div>
                          </div>
                          <div class="carousel-item">
                            <div class="img"><img class="d-block img-fluid" src="./img/carousel/carousel-img1.png" alt="Third slide"></div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Fim da Sessão Dashboard-->

    <section class="caixa"> <!-- Início sessão caixa -->
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12">
                    <h2 class="font-weight-bold text-center text-light pb-3">MAIS ACESSADOS</h2>
                </div>
            </div>
            <div class="row mb-lg-4 mb-md-4">
                <div class="col-md-4 d-flex">
                    <a href="./filmes/ironman.html">
                        <div class="flip-card"> <!--Flip Card 1-->
                            <div class="flip-card-inner">
                                <div class="flip-card-front flip-card-bg1">
                                    <p class="title">Dashboardm de Ferro</p>
                                </div>
                                <div class="flip-card-back">
                                    <p class="title">Sinopse:</p>
                                    <p class = "justo">Tony Stark é um industrial bilionário e inventor brilhante que realiza testes bélicos no exterior, mas é sequestrado por terroristas que o forçam a construir uma arma devastadora. Em vez disso, ele constrói uma armadura blindada e enfrenta seus sequestradores. Ao voltar para os EUA, Stark aprimora a armadura e a utiliza para combater o crime.</p>
                                </div>
                            </div>
                    </a>
                </div>
                </div>
                    <div class="col-md-4 d-flex">
                        <div class="flip-card"> <!--Flip Card 2-->
                            <div class="flip-card-inner">
                                <div class="flip-card-front flip-card-bg2">
                                    <p class="title">Capitão América</p>
                                </div>
                                <div class="flip-card-back">
                                    <p class="title">Sinopse:</p>
                                    <p class = "justo">Steve Rogers é um jovem que participa de experiências visando a criação do supersoldado americano. Quando os oficiais militares conseguem transformá-lo em uma arma humana, eles percebem que não podem arriscar a vida do jovem nas batalhas de guerra.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-4 d-flex">
                    <div class="flip-card"> <!--Flip Card 3-->
                        <div class="flip-card-inner">
                            <div class="flip-card-front flip-card-bg3">
                                <p class="title">Os Vingadores</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="title">Sinopse:</p>
                                <p class = "justo">Continuando as épicas aventuras cinematográficas iniciadas por Dashboardm de Ferro, O Incrível Hulk, Dashboardm de Ferro 2, Thor e Capitão América: O Primeiro Vingador, The Avengers – Os Vingadores da Marvel é uma reunião de super-heróis inédita. Quando um inesperado inimigo aparece e ameaça a segurança e a tranquilidade do mundo, Nick Fury, diretor da agência internacional de pacificação conhecida como SHIELD, se vê em busca de uma equipe capaz de tirar o mundo da iminência de um desastre. Através do planeta, um ousado recrutamento se inicia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4 d-flex">
                    <div class="flip-card"> <!--Flip Card 4-->
                        <div class="flip-card-inner">
                            <div class="flip-card-front flip-card-bg4">
                                <p class="title">Dashboardm Aranha: Sem volta para casa</p>
                            </div>
                            <div class="flip-card-back">
                                <p class="title">Sinopse:</p>
                                <p class = "justo">Peter Parker tem a sua identidade secreta revelada e pede ajuda ao Doutor Estranho. Quando um feitiço para reverter o evento não sai como o esperado, o Dashboardm-Aranha e seu companheiro dos Vingadores precisam enfrentar inimigos de todo o multiverso.</p>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-4 d-flex">
                        <div class="flip-card"> <!--Flip Card 5-->
                            <div class="flip-card-inner">
                                <div class="flip-card-front flip-card-bg2">
                                    <p class="title">Capitão América</p>
                                </div>
                                <div class="flip-card-back">
                                    <p class="title">Sinopse:</p>
                                    <p class = "justo">Tony Stark é um industrial bilionário e inventor brilhante que realiza testes bélicos no exterior, mas é sequestrado por terroristas que o forçam a construir uma arma devastadora. Em vez disso, ele constrói uma armadura blindada e enfrenta seus sequestradores. Ao voltar para os EUA, Stark aprimora a armadura e a utiliza para combater o crime.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-4 d-flex">
                    <div class="flip-card"> <!--Flip Card 6-->
                        <div class="flip-card-inner">
                            <div class="flip-card-front flip-card-bg3">
                                <p class="title">Os Vingadores</p>

                            </div>
                            <div class="flip-card-back">
                                <p class="title">Sinopse:</p>
                                <p class = "justo">Tony Stark é um industrial bilionário e inventor brilhante que realiza testes bélicos no exterior, mas é sequestrado por terroristas que o forçam a construir uma arma devastadora. Em vez disso, ele constrói uma armadura blindada e enfrenta seus sequestradores. Ao voltar para os EUA, Stark aprimora a armadura e a utiliza para combater o crime.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12 border border-light rounded bg-danger">
                    <h2 class="text-light text-center font-weight-bold text-uppercase">Artigos em Destaque</h2>
                </div>
            </div>
            <div class="row border border-light rounded">
                <div class="col-md-12 d-flex flex-wrap">
                    <div class="col-sm-2 text-center">
                        <img src="./img/icons-personagens/feiticeira.png" onclick="openWin()" alt="Feiticeira Escarlate" width="75%" class="img
                        ">
                        <p>Feiticeira Escarlate</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="./img/icons-personagens/visao.jpg" onclick="Link()" alt="Visão" width="75%" class="img
                        ">
                        <p>Visão</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="./img/icons-personagens/falcao.jpg" alt="Falcão" width="75%">
                        <p>Falcão</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="./img/icons-personagens/soldado_invernal.jpg" alt="Soldado Invernal" width="75%">
                        <p>Soldado Invernal</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="./img/icons-personagens/loki.png" alt="Loki" width="75%" class="img-fluid">
                        <p>Loki</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="./img/icons-personagens/mobius.jpg" alt="Mobius M. Mobius" width="75%">
                        <p>Mobius M. Mobius</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="./img/icons-personagens/treinador.jpg" alt="Treinador" width="75%">
                        <p>Treinador</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="./img/icons-personagens/dashboardm_de_ferro.png" alt="Dashboardm de Ferro" width="75%">
                        <p>Dashboardm de Ferro</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="./img/icons-personagens/viuva.png" alt="Viuva Negra" width="75%">
                        <p>Viuva Negra</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="./img/icons-personagens/dashboardm_aranha.png" alt="Dashboardm Aranha" width="75%">
                        <p>Dashboardm Aranha</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="./img/icons-personagens/guardioes_galaxia.jpg" alt="Guardiões da Galáxia" width="75%">
                        <p>Guardiões da Galáxia</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="./img/icons-personagens/xman.png" alt="X-Men" width="75%">
                        <p>X-Men</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Fim sessão caixa -->

    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50 colorMarvelInverted">
        <div class="container text-center">
          <small>Criador - Mateus Soares</small>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <script src="./js/funcoes.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/b18aea18c4.js" crossorigin="anonymous"></script>

  </body>
</html>
