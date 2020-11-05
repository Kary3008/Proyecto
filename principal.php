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
        <h4 class="text-center py-3">Módulos Interactivos</h4>
          <div class="container py-3">
            <div class="row" data-aos="fade-down">
          <!-- inicia nuestra tarjeta de sevicios -->
              <div class="col aling-middle">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
                    <div class="card-header text-center" style="background: #cc3333; color: #fff;">
                      Recorrido Virtual
                    </div>
                    <a href="#"><img src="img/recVirtual.png" class="card-img-top servicios-img" alt="Modulo1"></a>
                    <div class="card-body">
                      <p class="card-text text-justify">Vive la experiencia como si estuvieras ahí.</p>
                   </div>
              </div>
            </div><!-- termina primera card-->
            <!-- inicia nuestra tarjeta de sevicios -->
              <div class="col aling-middle">
                <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
                  <div class="card-header text-center" style="background: #cc3333; color: #fff;">
                    Juegos Interactivos
                  </div>
                    <a href="#"><img src="img/juego.jpg" class="card-img-top servicios-img" alt="Modulo2"></a>
                  <div class="card-body">
                     <p class="card-text text-justify">Diviertete en los juegos que tenemos para ti.</p>
                 </div>
              </div>
            </div><!-- termina segunda card-->
        <!-- inicia nuestra tarjeta de sevicios -->
            <div class="col aling-middle">
              <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 20rem;">
                <div class="card-header text-center" style="background: #cc3333; color: #fff;">
                    Control de DIES
                </div>
                  <a href="#"><img src="img/controldies.jpg" class="card-img-top servicios-img" alt="Modulo3"></a>
                  <div class="card-body">
                    <p class="card-text text-justify">Mantén tu asistencia a las sesiones de manera segura.</p>
                  </div>
              </div>
            <!-- termina Tercera card-->
          </div>
        </div>
      </div>
  <!-- termina seccion modulos-->
      </div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
