<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href='../web/css/material_icons.css' rel='stylesheet'>
      <!--Import materialize.css-->
      <link type='text/css' rel='stylesheet' href='../web/css/materialize.min.css'  media='screen,projection'/>
      <link rel="stylesheet" type="text/css" href="../web/css/components.css">
      <link rel='stylesheet' href='../web/css/style.css'>
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
      <!-- En primera vista se mostrara un pequeño Slider para que el usuario sea atraido por la página web y le parezca diferente e intuitiva -->
            <div class='slider'>
                <ul class='slides'>
                    <li>
                      <img src='../web/img/homeslider/1.png'> <!-- random image -->
                      <div class='caption center-align'>
                        
                      </div>
                    </li>
                    <li>
                      <img src='../web/img/homeslider/2.png'> <!-- random image -->
                      <div class='caption left-align'>
                        <h3>Comparte</h3>
                        <h5 class='light grey-text text-lighten-3'>Con quien quieras, donde tu quieras.</h5>
                      </div>
                    </li>
                    <li>
                      <img src='../web/img/homeslider/3.png'> <!-- random image -->
                      <div class='caption right-align'>
                        <h3>Regala</h3>
                        <h5 class='light grey-text text-lighten-3'>Dale una sorpresa a una persona especial.</h5>
                      </div>
                    </li>
                    
                </ul>
          </div>
      
   

         <!-- Aqui mostrare los productos disponibles en la tienda -->
        <div class='container'>
        
           <div>
                <h5 class='left-align'>Productos disponibles</h5>
                <H5 class='green-text'><i class='material-icons left'>play_arrow</i>Categoría Peliculas </H5>
          </div>

       

              <!--Bloque de codigo para la forma en que se mostraran los productos-->
              <div class='row'>
                  <!--INICIA -->
                  <div class='card col s12 m4 l4 hoverable'>
                        <div class='card-image '>
                              <img class='activator' src='../web/img/productos/giftcards/netflix.jpg'>
                        </div>

                        <div class='card-content'>
                              <p >Tarjeta de regalo NETFLIX para que puedas ver las peliculas que quieras donde quieras y con quien tu quieras.</p>
                        </div>

                        <div class='card-action'>  
                              <p class='activator' style='color: rgb(40,140,100);'>Añadir al carrito</p>
                        </div>
                        
                        <div class='card-reveal'>

                        <span class='card-title grey-text text-darken-4'> NETFLIX <SMALL class='green-text'> GIFTCARD</SMALL>
                              <i class='material-icons right'>close</i>
                        </span>
                        <p>Tarjeta para uso en el servicio de netflix.</p>
                    

                    <!-- TEXTBOX DE VALORES -->
                    
                    
                      
                   
                    <h6>PRECIO</h6>
                    <div class="row">
                    <div class="col s3 m3 l3">
                    <a  style="color:rgb(40,40,40);" onclick="restar_precio();" class="center-align waves-effect waves-dark btn-floating green lighten-5 spin-per"><</a>
                    </div>
                    <div class="col s6 m6 l6">
                    <form name="f2" id="f2">  
                    <input disabled class"validate" placeholder="Cantidad" type="text" name="f2t2" id="precio">
                    <label for="f2t2"></label>
                    </form>   
                    </div>
                    <div class="col s3 m3 l3">
                    <a  style="color:rgb(40,40,40);" onclick="aumentar_precio();" class="center-align waves-effect waves-dark btn-floating green lighten-5">></a>
                    </div>
                    </div>
                    <!--FIN DE TEXTBOX -->

                    <!-- TEXTBOX DE VALORES -->
                    <h6>Cantidad</h6>
                    <div class="row">
                    <div class="col s3 m3 l3">
                    <a  style="color:rgb(40,40,40);" onclick="restar_numero();" class="center-align waves-effect waves-dark  btn-floating green lighten-5"><</a>
                    </div>
                    <div class="col s6 m6 l6">
                    <form name="f1" id="f1">  
                    <input disabled class"validate" placeholder="Cantidad" type="text" name="f1t1" id="cantidad">
                    <label for="f1t1"></label>
                    </form>   
                    </div>
                    <div class="col s3 m3 l3">
                    <a style="color:rgb(40,40,40);" onclick="aumentar_numero();" class="center-align waves-effect waves-dark   btn-floating green lighten-5">></a>
                   
                    <!--FIN DE TEXTBOX -->

                    
                    
                  
                </div>    

                <a style="color:rgb(40,40,40);" onclick="" class=" waves-effect waves-dark  btn green lighten-3">Agregar</a>
            </div>
          </div>
        <!--TERMINA -->



        
        </div>
        <!--Termina bloque de productos-->




      </div> 
      </MAIN>

      
      <footer>
         
         <?php
         include("../app/views/footer.php");
         ?>

      </footer>
      

      <!--Import jQuery before materialize.js-->
        
      

            <?php
            include('../app/views/scripts.php')
        ?>
    </body>
  </html>