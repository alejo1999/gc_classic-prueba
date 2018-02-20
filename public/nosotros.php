<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href='../web/css/material_icons.css' rel='stylesheet'>
     
  
      <!--Import materialize.css-->
      <link type='text/css' rel='stylesheet' href='../web/css/materialize.min.css'  media='screen,projection'/>
      <link rel="stylesheet" href="../web/css/components.css">
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
      
      <div class="container">
            <img src="../web/img/logo/logo_medium_green.png" width="400px" style="padding-top: 20px;padding-bottom: 20px;" >
      </div>
            
      <div class="parallax-container" style="height: 130px" >
        <div class="parallax"><img src="../web/img/parallax/1.jpg" ></div>
        <h2 style="color: rgb(255,255,255); font-family: calibri light; margin-left: 10%; text-shadow: 10px 10px 10px 10px black">Conocenos</h2>
      </div> 
         
      <p style="height:;"> </p>
             

    <div class="container">
      <div class="row">
        <div class="col s12">
            <ul class="tabs">
              <li class="tab col s4"><a href="#test1"><p class="pestana"> Acerca de GC Classic</p></a></li>
              <li class="tab col s4"><a class="active" href="#test2" ><p class="pestana">Contactanos</p></a></li>
              <li class="tab col s4"><a class="active" href="#test3" ><p class="pestana">Nosotros</p></a></li>
         
            </ul>
        </div>
          
            <div id="test1" class="col s12">
            <h5 class="texto_de_conocenos">GC Classic te proporciona venta de diferentes tipos de tarjetas de regalo (GIFTCARDS), de todo tipo de muchos montos, justos para la ocasion que tu quieras regalar o obtener!.</h5>

            <h4 class="telefono">NUESTRA VISIÓN</h4>
            <h5 class="texto_de_conocenos">Ser al año 2022 una empresa pionera en el negocio de las tarjetas de regalo de la región y lograr ser un sitio de ventas por exelencia</h5>


            <h4 class="telefono">NUESTRA MISIÓN</h4>
            <h5 class="texto_de_conocenos">Satisfacer los gustos de los clientes, con una alta variedad de tarjetas de regalo dependioendo de suws necesidades, ofreciendo un rapido y facil servicio.</h5>

            <h4 class="telefono">VALORES:</h4>
            <h5 class="texto_de_conocenos">Servicio Responsable y fiable</h5>
            <h5 class="texto_de_conocenos">Compromiso de exelente calidad</h5>

          </div>
          
              <div id="test2" class="col s12">

              <h4 class="telefono">Puedes comunicarte con nosotros!</h4>
              <p class"texto_de_contactenos">Nuestro telefono para que puedas comunicarte con nuestra empresa y comunicarnos inconvenientes o solicitar algún tipo de ayuda.</p>
              <h3 class="telefono"><i class="material-icons left" style="color:rgb(20,220,60); font-size:48px;">phone</i>2233-4455</h3>

              <p class"texto_de_contactenos">O puedes contactarnos a nuestras Redes sociales como Facebook e Instagram.<br> a continuacion te dejamos unos enlaces para redireccionarte a nuestras páginas</p>
             <a href="https://www.facebook.com/"> <img class="redes_pic " src='../web/img/redes/facebook.png'></a>
             <a href="https://www.instagram.com/"><img class="redes_pic" src='../web/img/redes/instagram.png'></a>


              </div> 

              <div id="test3" class="col s12">

              <h4 class="" style="color:gray;">Programadores</h4>
              <h5 class="">Alejandro Ernesto Mejia Rodriguez</h5>
              <h5 class="">Carlos Eduardo Nuñez Urrutia</h5>

              <h6 style="">Desarrolladores de la plataforma GC Classic - 2018 todo el proceso ha sido cuidadosamente elaborado para la mejor experiencia del usuario en la página web.</h6>
             


              </div> 

      </div>
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

        <?php
            include('../app/views/scripts.php')
        ?>
    </body>
  </html>