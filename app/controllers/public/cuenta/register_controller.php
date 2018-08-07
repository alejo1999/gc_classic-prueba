<?php
require_once("../app/models/cliente.class.php");
require_once("../app/libraries/recaptcha-1.0.0/php/recaptchalib.php");
try{
	$cliente = new Cliente;
    if(isset($_POST['registrar'])){
        $_POST = $cliente->validateForm($_POST);

        $secret = "6LcRq2YUAAAAACxoMymVeFWKRBYgnZUkqY6eNXhK";
        $response = null;
        // comprueba la clave secreta
        $reCaptcha = new ReCaptcha($secret);
       
        if ($_POST["g-recaptcha-response"]) {
            $response = $reCaptcha->verifyResponse(
            $_SERVER["REMOTE_ADDR"],
            $_POST["g-recaptcha-response"]
            );
         }
        
        if($response != null && $response->success){
            
           if($cliente->setNombres($_POST['nombre'])){
            if($cliente->setApellidos($_POST['apellidos'])){
                if($cliente->setCorreo($_POST['correo'])){
                    if($cliente->setTelefono($_POST['telefono'])){
                        if($_POST['clave1'] == $_POST['clave2']){
                            if($cliente->setClave($_POST['clave1'])){
                                if($cliente->setGenero(isset($_POST['estado'])?1:0)){
                                    if($cliente->createCliente()){
                                        Page::showMessage(1, "Cliente  registrado", "login.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception("Genero incorrecto");
                                }
                            }else{
                                throw new Exception("Clave menor a 8 caracteres");
                            }
                        }else{
                            throw new Exception("Claves diferentes");
                        }
                    }else{
                        throw new Exception("Telefono incorrecto");
                    }
                }else{
                    throw new Exception("Correo incorrecto");
                }
            }else{
                throw new Exception("Apellidos incorrectos");
            }
        }else{
            throw new Exception("Nombres incorrectos");
        }
         }else {
           // Si el código no es válido, lanzamos mensaje de error al usuario
            throw new Exception("Porfavor llena el reCAPTCHA ");

           
         }


        
    }
    
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/public/cuenta/register_view.php");
?>