<main>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="?aula=aula15&arquivo=menu.php">SENAI DF</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?aula=aula15&arquivo=menu.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Empresa</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cursos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">PHP</a></li>
              <li><a class="dropdown-item" href="#">Java</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">C#</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Desativado</a>
          </li>
        </ul>
        <form action="?aula=aula15&arquivo=menu.php" method="POST" class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Busca" aria-label="Search" name="busca">
          <button class="btn btn-light" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
</main>