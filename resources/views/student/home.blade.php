<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <title>Home - Aluno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png"/>
    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="./css/homepageAluno.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
  <header>
  <!--Barra de navegação e Menu-->
  <nav class="navbar navbar-dark navbar-darkgreen">
  <div class="container-fluid">
    <a href="./index.html"><img class="navbar-brand" src="./assets/favicon.png" alt="brand"></a>
    <h1 class="text-white">Aluno</h1>
    <button class="navbar-toggler border-white-50" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header navbar-darkgreen">
        <h5 class="offcanvas-title offcanvas-title-color" id="offcanvasDarkNavbarLabel">Presente!</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
          <div class="offcanvas-body bg-dark">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active " aria-current="page" href="./homeAluno.html">Início</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Disciplinas</a>
                </li>
                <li>
                  <a class="nav-link active" href="#">Faltas</a>
                </li>
                <li>
                  <a class="nav-link active" href="https://ava.unesc.net/login/index.php" target="_blank">AVA</a>
                </li>
              </ul>
          </div>
    </div>
  </div>
</nav>
<!-- End Navbar -->
</header>
<!-- main section -->
<main>
<section id="main">
  <div class="container">
    <div class="row">
      <div class="col m-4">
        <h3 class="text-center">Disciplinas Recentes</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <a class="text-decoration-none text-black" href="./QRCodeAluno.html">
            <div class="col">
              <div class="card border-dark">
                <h6 class="text-light navbar-darkgreen">4° Fase</h6>
                <div class="card-body">
                  <h5 class="card-title">23231.1 Projeto Integrador I - 2022/2</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam congue malesuada lorem, vel blandit magna blandit a.</p>
                </div>
              </div>
            </div>
          </a>
          <div class="col">
            <div class="card border-dark">
              <h6 class="text-light navbar-darkgreen">4° Fase</h6>
              <div class="card-body">
                <h5 class="card-title text-black">23231.1 Projeto Integrador I - 2022/2</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam congue malesuada lorem, vel blandit magna blandit a.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-dark">
              <h6 class="text-light navbar-darkgreen">4° Fase</h6>
              <div class="card-body">
                <h5 class="card-title text-black">23231.1 Projeto Integrador I - 2022/2</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam congue malesuada lorem, vel blandit magna blandit a.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-dark">
              <h6 class="text-light navbar-darkgreen">4° Fase</h6>
              <div class="card-body">
                <h5 class="card-title text-black">23231.1 Projeto Integrador I - 2022/2</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam congue malesuada lorem, vel blandit magna blandit a.</p>
              </div>
            </div>
          </div>
        </div>
</section>
<!-- End main section -->
</main>
</body>
</html>
