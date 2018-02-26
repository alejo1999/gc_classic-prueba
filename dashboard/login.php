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
                    <i class="material-icons large" >account_circle</i>
                    <p>Inicia sesión con tu cuenta </p>   
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
                <!--boton de la ventana modal-->
                <a class='modal-trigger' href='#modal1'>Recuperar contraseña</a>
                </form>
            </div>
        </div>

        
        
        <!-- Ventana modal -->
        <div id="modal1" class="modal ">
          <div class="modal-content center  container">
            <h4>Recuperar Contraseña</h4>
            <div>
            <spam>Ingresa el correo que tienes registrado en tu cuenta posteriormente se te enviara un codigo ,</spam>
            <p> ingresa ese codigo como contraseña luego puedes modificarla </p>
            </div>
            <div class="container">
                <form action="">
                    <div class="input-field col s12 m4 l3">
                    <i class="material-icons prefix">account_box</i>
                        <input type="email" id="email"  class="validate">
                        <label for="email" data-error="incorrecto" data-success="correcto" >Correo</label>
                    </div>
                    <div class='center'>
                        <a onclick='listo_contraseña()'class='btn-floating btn-large modal-close waves-effect waves-light light-blue lighten-1'><i class="material-icons">send</i></a>
                    </div>
                </form>
            </div>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>

        
    </main>
    <footer>
        
    </footer>
        <?php
        #llamado de el archivo maestro footer
            include('../app/views/scripts.php')
        ?>   
</body>
         
</html>