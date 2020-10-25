<?php include 'main/conecta.php';
session_start();
$usuario = $_SESSION['Usuario'];
if (!isset($usuario)) {
 header("location:session.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="includes/push/push.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Inicio de Sistema</title>
    <!--Inicia notificaciones-->
    <?php
      $notification= '<script>
          Push.create("Hola, bienvenido.", {
                body: "Visita mi repositorio en GitHub.",
                icon: "img/logo.png",
                timeout: 6000,
                onClick: function() {
                  window.location="https://github.com/Kary3008";
                  this.close();
                }
          });
        </script>';
          echo $notification;
          ?>
        <!--Termina notificaciones-->
  </head>
  <body>
    <?php include 'main/navbar.php'; ?> <!--Se manda a llamar el Navbar-->
      <div class="container">
        <h4 class="text-center py-3">Sistema Gestor de Base de Datos</h4>
        <h5 class="text-center py-2">Contenido</h5>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
