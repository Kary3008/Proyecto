  <!--Inicia Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to left,  #222,#CC3333, #990000 )">
        <a class="navbar-brand" href="project.php">
          <img src="img/logo.png" alt="Logotipo Borderline" class="logo" style="width: 150px;
          height: 50px">
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar_nav">
                  <li class="nav-item active" style="list-style: none">
                    <a class="nav-link disabled" style="color: #ddd"  href="#" tabindex="-1" aria-disabled="true">Bienvenido al Sistema: <?php echo $usuario; ?></a>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" style="color: #ddd" href="project.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" style="color: #ddd" href="#">Tus Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle"style="color: #ddd"  href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opciones
                      </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Perfil</a>
                      <a class="dropdown-item" href="#">Configuración</a>
                      <a class="dropdown-item" href="main/cerrar.php">Cerrar sesión</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
    <!--Termina navbar-->
