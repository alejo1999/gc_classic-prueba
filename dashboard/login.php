<!DOCTYPE html>
<html lang="es">
<head>
        <?php

        include('../app/views/head.php');
    
        ?>
</head>
<body  id='login' class='font-cover'>
    <header>
        
    </header>
    <main>
    <div class="row">
    <div class='container-login center z-depth-5'>
        <div style="margin:15px 0;">
            <i class="material-icons">account_circle</i>
            <p>Inicia sesión con tu cuenta cambio2</p>   
        </div>
        <form action="">
          <div class="input-field col s12 l12">
          <i class="material-icons prefix">account_box</i>
            <input type="text" id="first_name" class="validate">
            <label for="first_name">Correo</label>
          </div>
          <div class="input-field col s12 l12">
          <i class="material-icons prefix">vpn_key</i>
            <input type="text" id="last_name" class="validate">
            <label for="last_name">contraseña</label>
          </div>
          
          <div>
              <a href='index.php'class='btn-floating btn-large  waves-effect waves-light light-blue lighten-1'><i class="material-icons">send</i></a>
          </div>
          <a href='#'>Recuperar contraseña</a>
        </form>

    </div>
</div>
    </main>
    <footer>
        
    </footer>
        <?php
            include('../app/views/scripts.php')
        ?>   
</body>
         
</html>