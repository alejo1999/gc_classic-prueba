<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href='../web/css/material_icons.css' rel='stylesheet'>
      <link rel="stylesheet" href='../web/css/components.css'>
      <link rel="stylesheet" type="text/css" href="../web/css/img_responsives.css">
      <!--Import materialize.css-->
      <link type='text/css' rel='stylesheet' href='../web/css/materialize.min.css'  media='screen,projection'/>
      
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
      
      <!--- Informacion del carrito y mis productos -->
      <!--Creo un contenedor para la informacion del carrito -->
        <div class="container">
              <h2 style="color: rgb(30,140,100); font-family: calibri light">Mi Carrito</h2>
        
      
      <!--Aqui empieza la tabla de productos -->

         <table class="highlight">
        <thead>
          <tr>
              <th>Imagen</th>
              <th>Giftcard</th>
              <th>Cantidad</th>
              <th>Precio</th>
              <th>Destinatario</th>
              <th>Opciones</th>
          </tr>
        </thead>
        
        <!--Información de la fila nueva -->
        <tbody>
          <tr>
            <td> <img src="../web/img/productos/giftcards/itunes.jpg" width="120px"> </td>
            
            <td>iTunes</td>
            
            <td>2</td>
            
            <td>$50.00</td>
            
            <td>  
                <label id="img_category_label" class="field" for="img_category"data-value="">
                      <span>¿Para quién?</span>
                        <div id="img_category" class="psuedo_select" name="img_category">
                          <span class="selected"></span>
                            <ul id="img_category_options" class="options">
                                <li class="option" data-value="commercial" >Para mí</li>
                                <li class="option" data-value="residential">Regalar</li>
                            </ul>
                      </div>
                </label>
            </td>

            <td>
                <button class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class='material-icons '>mode_edit</i></button>
                <button class="waves-effect waves-light btn red"><i class='material-icons '>delete</i></button>
            </td>

          </tr>
      
        </tbody>
        <!--Fin de fila -->

          <!--Información de la fila nueva -->
        <tbody>
          <tr>
            <td> <img src="../web/img/productos/giftcards/spotify.jpg" width="120px"> </td>
            
            <td>Spotify</td>
            
            <td>1</td>
            
            <td>$20.00</td>
            
            <td>  
                <label id="img_category_label" class="field" for="img_category"data-value="">
                      <span>¿Para quién?</span>
                        <div id="img_category" class="psuedo_select" name="img_category">
                          <span class="selected"></span>
                            <ul id="img_category_options" class="options">
                                <li class="option" data-value="commercial" >Para mí</li>
                                <li class="option" data-value="residential">Regalar</li>
                            </ul>
                      </div>
                </label>
            </td>

            <td>
                <button class="waves-effect waves-light btn"><i class='material-icons '>mode_edit</i></button>
                <button class="waves-effect waves-light btn red"><i class='material-icons '>delete</i></button>
            </td>

          </tr>
      
        </tbody>
        <!--Fin de fila -->
             <!--Información de la fila nueva -->
        <tbody>
          <tr>
            <td> <img src="../web/img/productos/giftcards/netflix.jpg" width="120px"> </td>
            
            <td>Netflix</td>
            
            <td>1</td>
            
            <td>$100.00</td>
            
            <td>  
                <label id="img_category_label" class="field" for="img_category"data-value="">
                      <span>¿Para quién?</span>
                        <div id="img_category" class="psuedo_select" name="img_category">
                          <span class="selected"></span>
                            <ul id="img_category_options" class="options">
                                <li class="option" data-value="commercial" >Para mí</li>
                                <li class="option" data-value="residential">Regalar</li>
                            </ul>
                      </div>
                </label>
            </td>

            <td>
                <button class="waves-effect waves-light btn"><i class='material-icons '>mode_edit</i></button>
                <button class="waves-effect waves-light btn red"><i class='material-icons '>delete</i></button>
            </td>

          </tr>
      
        </tbody>
        <!--Fin de fila -->

      </table>
      <!--Aqui termina la tabla de productos -->
 

      <h5>Correo de la persona que quieres regalarle</h5>
      <h6 style="color: rgb(40,100,50); margin-bottom: 20px;">eduardozu_@hotmail.com</h6>
      <button class=" waves-effect waves-light btn modal-trigger" href="#modal2"  >editar correo para Regalar<i class='material-icons'></i></button>


      <h5>Metodo de pago</h5>
       <form action="#">
    <p>
      <input name="group1" type="radio" id="test1" />
      <label for="test1"><img src="../web/img/metodo_de_pago/paypal_log.png" width="120px"></label>
    </p>
    <p>
      <input name="group1" type="radio" id="test2" />
      <label for="test2"><img src="../web/img/metodo_de_pago/tarjeta-de-credito.png " width="120px"></label>
    </p>
 
  </form>


      
      <h4 style="color: rgb(30,140,100); font-family: calibri light; margin-top: 40px;" >Total:<br> $220.00
      </h4>

        <button class=" waves-effect waves-light btn modal-trigger" href="#modal3"  >Pago final<i class='material-icons'></i></button>

  

  <!-- Modal Structure -->
  <div id="modal1" class="modal ">
    <div class="modal-content">
     

<div class="row">
  

    <div class="col m6">
        <img style="padding-bottom:0.5cm;" src="../web/img/productos/giftcards/itunes.jpg" class="img_modificar_producto" align="left">  
        
        <div class="ec-stars-wrapper">
          <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
          <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
          <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
          <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
          <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
        </div>
        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>


       
        </div>
        
        <div class="col m6">
                <h5>iTunes </h5>
                  <p>Regala esta tarjeta hoy y ponle ritmo a la vida de un amigo o familiar que tu quieras mucho! spotify giftcard es para ti.</p>
            
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
                          <div>
                            
                          </div>
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
                      </div>
                      <!--FIN DE TEXTBOX -->

                </div>
            </div>

        <div class="row center-align">

           <a href="#!" class="modal-action modal-close waves-effect waves-red btn text-darken-1">Aceptar</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-red btn red">Cancelar</a>
        </div>

        </div>           
    </div>
  </div>
  <!-- Aqui termina la modal -->

    <!-- Diseño de la ventana modal para pagar el producto -->
 <!-- Modal Structure -->
    <div id="modal2" class="modal">
    <div class="modal-content">
     
          <h3>Regalar  </h3> 
          <h6>Proceso de pago:</h6>
          <p>Entre las opciones de destinatario seleccionaste regalar pero no haz especificado para quien se dirige. <br> a continuación porfavor ingresa el correo electronico de la persona a la que quieres regalar la Giftcard.</p>


           <div class="row">
                <div class="col s12">
                  <h5>Correo electronico:</h5>
                      <div class="input-field inline">
                        <input id="email" type="email" class="validate">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                      </div>
                </div>
          </div>
      </div>
      <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat "><i class='material-icons right '>card_giftcard</i>continuar</a>
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cancelar</a>
      </div>
  </div>
         
  <!-- Aqui termina la modal -->


   <!-- Diseño de la ventana modal para pagar el producto -->
 <!-- Modal Structure -->
    <div id="modal3" class="modal">
    <div class="modal-content">
     
     <h3 class="center-align"><i class="material-icons">done</i></h3>
          <h3 class="center-align">Realizado</h3>
          <h6 class="center-align">La compra de la tarjeta fue exitosa, verifica tu correo para confirmar que el envio fue correcto</h6> 
          <h3 class="center-align"><a href="index.php" class="modal-action modal-close waves-effect waves-green btn ">Aceptar</a></h3>
          
      </div>
     
          
         
      
  </div>
         
  <!-- Aqui termina la modal -->

      <!-- Diseño de la ventana modal para pagar el producto -->
 <!-- Modal Structure -->
    <div id="modal3" class="modal">
    <div class="modal-content">
     
          <h3>Regalar  </h3> 
          <h6>Proceso de pago:</h6>
          <p>Entre las opciones de destinatario seleccionaste regalar pero no haz especificado para quien se dirige. <br> a continuación porfavor ingresa el correo electronico de la persona a la que quieres regalar la Giftcard.</p>


           <div class="row">
                <div class="col s12">
                  <h5>Correo electronico:</h5>
                      <div class="input-field inline">
                        <input id="email" type="email" class="validate">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                      </div>
                </div>
          </div>
      </div>
      <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class='material-icons right'>card_giftcard</i>continuar</a>
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cancelar</a>
      </div>
  </div>
         
  <!-- Aqui termina la modal -->

      <p></p>
       

<!--Aqui termina el container -->
</div>
     </MAIN>
      
      <FOOTER>
      
      <?php
      include("../app/views/footer.php");
      ?>
        
      </FOOTER>

      <!--Import jQuery before materialize.js-->
        <script type='text/javascript' src='../web/js/jquery-3.2.1.min.js'></script>
        <script type='text/javascript' src='../web/js/materialize.min.js'></script>
        <script type='text/javascript' src='../web/js/main.js'></script>
        <script src="../web/js/components.js"></script>

        <?php
            include('../app/views/scripts.php')
        ?>

    </body>
  </html>