<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <title>Home - Professor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png"/>
    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS File -->
  <link rel="stylesheet" href="./css/menuProfessor.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a href="/"><img class="navbar-brand" src="./assets/favicon.png" alt="brand"></a>
          <h1>Professor</h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
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
                            <a class="nav-link active" href="https://ava.unesc.net/login/index.php" target="_blank">AVA</a>
                        </li>
                    </ul>
                </div>
          </div>
        </div>
      </nav>
    <main>
        <h5 id="modal-title" >Menu de chamadas</h5>
      <div>
        <ul id="sidebar-menus">
          <li><a href="./MateriasProfessor.html"><h5>AULAS</h5><img src="./assets/ico/check-all.png"></a></li>
          <li><a href="#"><h5>RELATORIOS</h5><img src="./assets/ico/document--v1.png"></a></li>
          <li><a href="#"><h5>CONFIGURAÇÕES</h5><img src="./assets/ico/services.png"></a></li>
        </ul>
      </div>
    </main>
</body>
</html>
