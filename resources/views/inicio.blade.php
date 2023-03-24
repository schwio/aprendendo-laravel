<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Matias" />
        <meta name="author" content="Matias" />
        <title>Presente!</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.png"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

</head>
<body id="page-top">
    <!--Navegação-->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#page-top">Menu</a></li>
            <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
            <li class="sidebar-nav-item"><a href="./login.html">Login</a></li>
            <li class="sidebar-nav-item"><a href="#sobre">Sobre</a></li>
        </ul>
    </nav>
    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1 text-white">Presente!</h1>
            <h3 class="mb-5 text-white"><em>Sistema de otimização de chamadas</em></h3>
            <a class="btn btn-darkgreen btn-xl" href="#sobre">Clique Aqui Para Saber Mais</a>
        </div>
    </header>
    <!--Sobre-->
    <section class="content-section bg-light" id="sobre">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2>Sobre o projeto</h2>
                    <p class="lead mb-4">
                        Tendo em vista o alto tempo gasto pelos professores durante a realização das chamadas hoje em dia,
                        foi visto a necessidade de otmizar e reduzir o máximo possível a fim de liberar mais tempo de suas
                        aulas.
                        O protótipo proposto visa melhorar a administração do tempo gasto durante a realização das chamadas em salas de aula.
                        A partir deste princípio, será utilizado um dos meios mais populares nos dias de hoje para a confirmação dos indivíduos na lista de presença, sendo ele o QR Code.
                    </p>
                    <p class="lead mb-4">
                        Através do sistema proposto, o professor e aluno irão se conectar em sala de aula para
                        realizarem juntos, o registro de presença dos acadêmicos que farão o escaneamento do código disponibilizado pelo professor
                        na classe dentro do ambiente apresentado.
                    </p>
                    <a class="btn btn-darkgreen btn-xl" href="#page-bottom">Iniciar</a>
                </div>
            </div>
        </div>
    </section>
<!--Callout-->
<section id="page-bottom" class="callout">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="mx-auto mb-5">
            Vamos Começar!
        </h2>
        <a class="btn btn-primary btn-xl m-1" href="./homeAluno.html">Sou Aluno</a>
        <a class="btn btn-primary btn-xl m-1" href="./menuProfessor.html">Sou Professor</a>
    </div>
</section>
<!-- Footer-->
<footer class="footer text-center">
    <div class="container px-4 px-lg-5">
        <p class="text-black small mb-0">Copyright &copy; Presente! 2022</p>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
