<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href='../web/css/material_icons.css' rel='stylesheet'>
      <!--Import materialize.css-->
      <link type='text/css' rel='stylesheet' href='../web/css/materialize.min.css'  media='screen,projection'/>
      <link rel="stylesheet" type="text/css" href="../web/css/components.css">
      <link rel="stylesheet" type="text/css" href="../web/css/login_public.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
      <meta charset='UTF-8'>
    </head>

    <body>
      
      <HEADER>

      <?php
      include("../app/views/header_p.php");
      ?>

      </HEADER>
      
      <MAIN>

      

          <div class = "row">

            

            <div class="login_form col s12 m4 offset-m4"> 

            <a href="../dashboard/login.php"><h6>Iniciar como ADMIN</h6></a>
            <h3>Iniciar Sesión</h3> 

            <div class="input-field">
            
              <input id="nombre"type="text" placeholder="-Escribe aqui">
              <label for="nombre">Nombre de usuario</label>
            </div>

            <div class="input-field">
            
              <input id="nombre"type="text" placeholder="-Escribe aqui">
              <label for="nombre">Contraseña</label>
            </div>

            <a href="#" class="waves-effect waves-light btn">Aceptar</a>
            <a href="#!"class="">¿Olvidaste la contraseña?</a>
            

            </div>
          </div>

  

      </MAIN>

      
      <footer>
         
         <?php
         include("../app/views/footer_login_public.php");
         ?>

      </footer>
      

      <!--Import jQuery before materialize.js-->
        <script type='text/javascript' src='../web/js/jquery-3.2.1.min.js'></script>
        <script type='text/javascript' src='../web/js/materialize.min.js'></script>
        <script type='text/javascript' src='../web/js/main.js'></script>

        <?php
            include('../app/views/scripts.php')
        ?>
    </body>
  </html>