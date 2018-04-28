<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
class Page extends Component{
	public static function templateHeader($title){
		session_start();
		ini_set("date.timezone","America/El_Salvador");
		print("
			<!DOCTYPE html>
			<html lang='es'>
			<head>
				
                <meta charset='UTF-8'>
                <title>Dashboard - $title</title>
                <link type='text/css' rel='stylesheet' href='../../web/css/materialize.min.css'>
                <link type='text/css' rel='stylesheet' href='../../web/css/material_icons.css'>
                <link type='text/css' rel='stylesheet' href='../../web/css/style2.css'>
                <link type='text/css' rel='stylesheet' href='../../web/css/jquery.dataTables.min.css'>
                <script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
                <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <meta http-equiv='X-UA-Compatible' content='ie=edge'>
			</head>
			<body>
		");
		if(isset($_SESSION['id_admin'])&& ($_SESSION['id_tipousuario'])==2){
			print("
            <header>
            
            <nav class='cyan lighten-1 '>
            <div class='nav-wrapper navbar-fixed cyan lighten-1'>
                <a href='#!'  class='brand-logo center'><img class='tamanio' src='../../web/img/logo/logo_medium_black.png' ></a>    
              <!--  <a class='waves-effect waves-light right ' href='#' ><i class='material-icons right'>power_settings_new</i>Cerrar sesion</a>-->
               
                <a href='#' data-activates='slide-out' class='button-collapse '><i class='material-icons'>menu</i></a>
                
                <!-- Dropdown Trigger -->
                <a id='space2'class='dropdown-button right ' href='#!' data-activates='dropdown1'><i class='material-icons right'>settings</i></a>
                
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href='../cuenta/logout.php'><i class='material-icons '>vpn_key</i>Cerrar Sesion</a></li>
                    <li class='divider'></li>
                    <li><a href='../cuenta/profile.php'><i class='material-icons'>settings</i>modificar perfil</a></li>
                   
                </ul>
            </div>
            
            </nav>     
                        
      
            <ul id='slide-out' class='side-nav fixed'>
                <li>
                    <div class='user-view'>
                        <div class='background'>
                            <img src='../../web/img/wallpapers/fondo1.jpg' class='responsive-img'>
                        </div>
                        <span class='white-text email'>Bienvenido    <b>$_SESSION[nombre]</b></span>
                        <a href='#!name'><span class='white-text name'></span></a>
                        <a href='#!email'><span class='white-text email'><b>$_SESSION[correo]</b></span></a>
                    </div>
                </li>
                <li><a href='../cuenta/profilev.php'><i class='material-icons'>account_box</i>Perfil</a></li>
                <li><div class='divider'></div></li>
                <li><a href='../producto'class='waves-effect waves-light btn-large cyan lighten-1'><i class='material-icons'>shopping_cart</i>Productos</a></li>
                <li><a href='../categoria' class='waves-effect waves-light btn-large cyan lighten-1'><i class='material-icons'>list</i>Categorias</a></li>
                <li><a href='../proveedor' class='waves-effect waves-light btn-large cyan lighten-1'><i class='material-icons'>assignment_ind</i>Proveedor</a></li>
                
                <li><a href='#!' class='waves-effect waves-light btn-large cyan lighten-1'><i class='material-icons'>assessment</i>Estadisticas</a></li>
            </ul>       
            </header>
				<main class='container'>
					<h3 class='center-align'>$title</h3>
			");
        }
        else if(isset($_SESSION['id_admin']) && ($_SESSION['id_tipousuario'])==1){
			print("
            <header>
            
            <nav class='cyan lighten-1 '>
            <div class='nav-wrapper navbar-fixed cyan lighten-1'>
                <a href='#!'  class='brand-logo center'><img class='tamanio' src='../../web/img/logo/logo_medium_black.png' ></a>    
              <!--  <a class='waves-effect waves-light right ' href='#' ><i class='material-icons right'>power_settings_new</i>Cerrar sesion</a>-->
               
                <a href='#' data-activates='slide-out' class='button-collapse '><i class='material-icons'>menu</i></a>
                
                <!-- Dropdown Trigger -->
                <a id='space2'class='dropdown-button right ' href='#!' data-activates='dropdown1'><i class='material-icons right'>settings</i></a>
                
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href='../cuenta/logout.php'><i class='material-icons '>vpn_key</i>Cerrar Sesion</a></li>
                    <li class='divider'></li>
                    <li><a href='../cuenta/profile.php'><i class='material-icons'>settings</i>modificar perfil</a></li>
                   
                </ul>
            </div>
            
            </nav>     
                        
      
            <ul id='slide-out' class='side-nav fixed'>
                <li>
                    <div class='user-view'>
                        <div class='background'>
                            <img src='../../web/img/wallpapers/fondo1.jpg' class='responsive-img'>
                        </div>
                        <span class='white-text email'>Bienvenido    <b>$_SESSION[nombre]</b></span>
                        <a href='#!name'><span class='white-text name'></span></a>
                        <a href='#!email'><span class='white-text email'><b>$_SESSION[correo]</b></span></a>
                    </div>
                </li>
                <li><a href='../cuenta/profilev.php'><i class='material-icons'>account_box</i>Perfil</a></li>
                <li><div class='divider'></div></li>
                <li><a href='../producto'class='waves-effect waves-light btn-large cyan lighten-1'><i class='material-icons'>shopping_cart</i>Productos</a></li>
                <li><a href='../categoria' class='waves-effect waves-light btn-large cyan lighten-1'><i class='material-icons'>list</i>Categorias</a></li>
                <li><a href='../proveedor' class='waves-effect waves-light btn-large cyan lighten-1'><i class='material-icons'>assignment_ind</i>Proveedor</a></li>
                <li><a href='../tipousuario' class='waves-effect waves-light btn-large cyan lighten-1'><i class='material-icons'>supervisor_account</i>Tipo Usuario</a></li>
                <li><a href='../venta' class='waves-effect waves-light btn-large cyan lighten-1'><i class='material-icons'>add_shopping_cart</i>Ventas</a></li>
                <li><a href='../administrador' class='waves-effect waves-light btn-large cyan lighten-1'><i class='material-icons'>supervisor_account</i>Administradores</a></li>
                <li><a href='#!' class='waves-effect waves-light btn-large cyan lighten-1'><i class='material-icons'>assessment</i>Estadisticas</a></li>
            </ul>       
            </header>
				<main class='container'>
					<h3 class='center-align'>$title</h3>
			");
		}
        else{
			print("
				<main class=' container'>
			");
			$filename = basename($_SERVER['PHP_SELF']);
			if($filename != "login.php" && $filename != "register.php"){
				self::showMessage(3, "¡Debe iniciar sesión!", "../cuenta/login.php");
				self::templateFooterlogin();
				exit;
            }
            
            else{
				print("<h3 class='center-align'>$title</h3>");
			}
		}
	}
    public static function templateFooterlogin(){
		print("
            </main>
            

            <script type='text/javascript' src='../../web/js/jquery.min.js'></script>
            <script type='text/javascript' src='../../web/js/materialize.min.js'></script>
            <script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
            <script type='text/javascript' src='../../web/js/main.js'></script>
            
            
            </body>
            </html>
		");
	}
	public static function templateFooter(){
		print("
            </main>
            <footer class='page-footer  cyan lighten-1'>
            </footer>

            <script type='text/javascript' src='../../web/js/jquery.min.js'></script>
            <script type='text/javascript' src='../../web/js/materialize.min.js'></script>
            <script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
            <script type='text/javascript' src='../../web/js/main.js'></script>
            <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
            <script type='text/javascript' src='../../web/js/jquery.dataTables.min.js'></script>
            <script type='text/javascript' src='../../web/js/tabla.js'></script>
            
            </body>
            </html>
		");
	}
}
?>