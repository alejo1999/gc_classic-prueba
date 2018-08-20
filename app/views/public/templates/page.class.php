<?php
require_once("../app/models/database.class.php");
require_once("../app/helpers/validator.class.php");
require_once("../app/helpers/component.class.php");
class Page extends Component{
	public static function templateHeader($title){


        session_start();
        //Comprobamos si esta definida la sesión 'tiempo'.
    

        setlocale(LC_ALL,"es_ES");
		ini_set("date.timezone","America/El_Salvador");
		print("
        <!DOCTYPE html>
        <html lang='es'>
          <head>
            <!--Deja que el navegador sepa que el sitio web está optimizado para dispositivos móviles-->
            <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
            <meta charset='UTF-8'>
            <title>GC-Classic - $title</title>
            <link type='text/css' rel='stylesheet'href='../web/css/material_icons.css' rel='stylesheet'>
            <link type='text/css' rel='stylesheet' href='../web/css/materialize.min.css'  />
            <script type='text/javascript' src='../web/js/sweetalert.min.js'></script>
    
            
            <link type='text/css' rel='stylesheet' href='../web/css/jquery.dataTables.min.css'>
            <link rel='stylesheet' type='text/css' href='../web/css/components.css'>
            <link rel='stylesheet' href='../web/css/style.css'>
            
            
          </head>
      
          <body>
		");
		if(isset($_SESSION['id_cliente'])){

            if(isset($_SESSION['tiempo']) ) {

                //Tiempo en segundos para dar vida a la sesión.
                $inactivo = 480;//5min en este caso.
        
                //Calculamos tiempo de vida inactivo.
                $vida_session = time() - $_SESSION['tiempo'];
        
                    //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
                    if($vida_session > $inactivo)
                    {
                        
                        session_destroy();              
                        //Redirigimos pagina.
                        header("Location: logout2.php");
        
        
                        exit();
                    }
        
            }
            $_SESSION['tiempo'] = time();

			print("
      <header>
      <!-- barra de menu normal -->  
      <div class='navbar-fixed'>
          <nav class=' teal darken-1'>
              <div class='nav-wrapper'>
                  <a href='' class=' brand-logo'>
                  <img src='../web/img/logo/logo_medium.png' width='100px'> </a>
                  <a href='' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
                  <ul class='right hide-on-med-and-down'>
                      <li><a href='index.php'><i class='material-icons left'>home</i>Inicio</a></li>
                      <li><a href='nosotros.php'><i class='material-icons left'>assignment_ind</i>Quienes somos</a></li>
                      <li><a href='carrito.php'><i class='material-icons left'>shopping_cart</i>Carrito</a></li>
                      <li><a class='dropdown-button' data-activates='dropdown'><i class='material-icons left'>verified_user</i><b>Cuenta: $_SESSION[nombre_cliente]</b></a></li>
                  </ul>
                  <ul id='dropdown' class='dropdown-content'>
                    <li><a href='profile.php'>Editar perfil</a></li>
                    <li><a href='password.php'>Cambiar clave</a></li>
                    <li><a href='ventas.php'>Compras realizadas</a></li>
                    <li><a href='logout.php'>Cerrar Sesion</a></li>
                  </ul>
                  
              </div>
          </nav>
      </div>
      
      <!-- Menu para moviles -->
      <ul class='side-nav' id='mobile-demo'>
          <li><a href='index.php'><i class='material-icons left'>home</i>Inicio</a></li>
          <li><a href='nosotros.php'><i class='material-icons left'>assignment_ind</i>Quienes somos</a></li>
          <li><a href='carrito.php'><i class='material-icons left'>shopping_cart</i>Carrito</a></li>
          <li><a href='login_publico.php'><i class='material-icons left'>vpn_key</i>Iniciar Sesión</a></li>
          <li><a href='registrar.php'><i class='material-icons left'>people</i>Registrar</a></li>
      </ul>
  
  </header>
				<main class=''>
			");
        }
        else {
			print("
      <header>
      <!-- barra de menu normal -->  
      <div class='navbar-fixed'>
          <nav class=' teal darken-1'>
              <div class='nav-wrapper'>
                  <a href='' class=' brand-logo'>
                  <img src='../web/img/logo/logo_medium.png' width='100px'> </a>
                  <a href='' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
                  <ul class='right hide-on-med-and-down'>
                      <li><a href='index.php'><i class='material-icons left'>home</i>Inicio</a></li>
                      <li><a href='nosotros.php'><i class='material-icons left'>assignment_ind</i>Quienes somos</a></li>
                      <li><a href='login.php'><i class='material-icons left'>vpn_key</i>Iniciar Sesión</a></li>
                      <li><a href='registrar.php'><i class='material-icons left'>people</i>Registrar</a></li>
                  </ul>
                  
              </div>
          </nav>
      </div>
      
      <!-- Menu para moviles -->
      <ul class='side-nav' id='mobile-demo'>
          <li><a href='index.php'><i class='material-icons left'>home</i>Inicio</a></li>
          <li><a href='nosotros.php'><i class='material-icons left'>assignment_ind</i>Quienes somos</a></li>
          <li><a href='carrito.php'><i class='material-icons left'>shopping_cart</i>Carrito</a></li>
          <li><a href='login_publico.php'><i class='material-icons left'>vpn_key</i>Iniciar Sesión</a></li>
          <li><a href='registrar.php'><i class='material-icons left'>people</i>Registrar</a></li>
      </ul>
  
  </header>
				<main class=''>
					<h3 class='center-align'>$title</h3>
			");
		}
	}

	public static function templateFooter(){
		print("
				</main>
				<footer class='page-footer green'>
                <!-- El footer que ubicamos en este apartado sera para mostrar información final al usuario,
                links para redes sociales, ayudas, versión etc. -->
            <!--Footer-->
            <footer class='page-footer teal darken-1'>
                      <div class='c'ntainer'>
                        <div class='row'>
                          <div class='col l6 s12'>
                            <h5 class='white-text'>GC Classic <small style='color:cyan;'>Toma tu tarjeta</small></h5>
                            <p class='grey-text text-lighten-4'>GC Classic un sitio de venta online de giftcards para todo tipo de ocasión, en cualquier duda puedes ver nuestras redes sociales o escribirnos a nuestro correo:</p>
                            <p style='font-size:1.2em;'>gcclassic2018@gmail.com</p>
                          </div>
                          <div class='col l4 offset-l2 s12'>
                            <h5 class='white-text'>Buscanos en nuestras redes sociales</h5>
                            <ul>
                              <li><a class='grey-text text-lighten-3' href='https://www.facebook.com/GC-Classic-144244532916916/?ref=bookmarks'><img src='../web/img/redes/facebook.png' width='50px'></a></li>
                              <li><a class='grey-text text-lighten-3' href='http://www.instagram.com'><img src='../web/img/redes/instagram.png' width='50px'></a></li>
                       
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class='footer-copyright'>
                        <div class='container'>
                        © 2018 Todos los derechos reservados
                        <a class='grey-text text-lighten-4 right' href='#!'></a>
                        </div>
                      </div>
            </footer>
					
            <script type='text/javascript' src='../web/js/jquery.min.js'></script>
            <script type='text/javascript' src='../web/js/jquery-3.3.1.js'></script>
            <script type='text/javascript' src='../web/js/materialize.min.js'></script>
            <script type='text/javascript' src='../web/js/main.js'></script>
            <script type='text/javascript' src='../web/js/jquery.dataTables.min.js'></script>
            <script type='text/javascript' src='../web/js/tabla.js'></script>
            <script src='https://www.google.com/recaptcha/api.js'></script>
            
            
            
			</body>
			</html>
		");
	}
}
?>