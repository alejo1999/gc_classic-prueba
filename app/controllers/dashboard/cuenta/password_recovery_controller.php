<?php

require_once("../../app/models/admin.class.php");
require '../../app/libraries/PHPMailer/class.phpmailer.php';
require '../../app/libraries/PHPMailer/class.smtp.php';
    try{
        $cliente = new Administrador;
        $mail = new PHPMailer;

        if(isset($_POST['Recuperar'])){
                $_POST = $cliente->validateForm($_POST);

                $cliente->setCorreo($_POST['correo']);
                if($cliente->checkCorreo()){
                    if($cliente->checkNombre()){
                        $correo = $cliente->getCorreo();

                        $nombreuser = $cliente->getNombres();

                        date_default_timezone_set("America/El_Salvador");
                        setlocale(LC_ALL,"es_ES");
                        $hora = date(" g:i a");

                        $fecha = date("j F, Y"); 
                        

                        
                    
                            $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!!"#$%&/()=';
                            $largo=8;
                            for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $largo ; ) {
                                $x = rand(0,$n);
                                $pass.= $caracteres[$x];
                                }
                        
                            //Compones nuestro correo electronico
                            //Nuevo correo electronico.
                        
                            //Caracteres.
                            $mail->CharSet = 'UTF-8';

                            $mail->isSMTP();                                      // usamos smtp
                            $mail->Host = 'smtp.gmail.com';  // Especificamos el servidor smtp
                            $mail->SMTPAuth = true;                               // habilitamos la autenticacion smtp
                            $mail->Username = 'gcclassic2018@gmail.com';                 // SMTP usuario
                            $mail->Password = 'promodeoro';                           // SMTP conttraseña
                            $mail->SMTPSecure = 'ssl';                            // encriptacion ssl
                            $mail->Port = 465;  
                            //De dirección correo electrónico y el nombre
                            $mail->From = "gcclassic2018@gmail.com";
                            $mail->FromName = "GC-classic";

                            //Dirección de envio y nombre.
                            $mail->addAddress($correo);


                            //Enviar codigo HTML o texto plano.
                            $mail->isHTML(true);

                            //Titulo email.
                            $mail->Subject = "Recuperacion de contraseña | Gc-Classic";
                            //Cuerpo email con HTML.
                            $mail->Body = 
                            "
                            <head>  
                              <style>       
                                body { 
                                    height: 100%; width: 100%; max-width: 100%;
                                    font-family: 'Tahoma', arial;  
                                    background-color: #D8D8D8;
                                    overflow: hidden;
                                }   
                            
                                .wit {
                                    display: block; position:relative;
                                    width: 100%; max-width:80%;                             
                                    background-color: #FFF;         
                                    left:10%;
                                }
                            
                                .blue { color: #178195; }
                                .bold { font-weight: bold; }
                                .grey { color: #585858; }
                                .padding32 { padding: 32px; }
                              </style>
                            </head>
                            
                            <body>
                                <div class=wit>
                                <div class=padding32>
                                    <img src='https://lh3.googleusercontent.com/MUSTEmExnEWqdLsmx2YcIQ8vDZbxsE4jtXgw9Vsy9xAp307s4on998GJmz3b9bfNR4HNcYYY9qBQISWCDK1HCoGQAn2P_XWab5esSsQDGx3mwCLCMlHlyWcLzxAVhkR9Nqn6UtMcRDu1CFhlfCxoLdizeEfyHU1Pak-iN8uigtIgSSjEUSCnt9-QUduXi6aOW8e262AazJNs_AfqHCP4n_hKw-6R6CT-F3FIKNFiym5jiATqWe6A92eJU3FPVBZkH722kaYedSfJ-P5Q9O2nJUtqEfLOhmOEURyVnuvF4fTQDKBv89DCmOrGgDBJuWRuFR0_6kcutXQJXvxlQ6Ur2H47EVJv4Dw9mYjUqx7AWQQGJe5Kz63ydOF3t2WItbsnU6opoZqviozF4ZUUl-K6V8aVBAXeIucZmNi-rPRptwPf6vYH6qR0AvDaHoI18EEXquedW-z6z1J1DM9djR1E92HNEHJh2auJtSRnsQlZBbbnLp-4vNx_LlUYJaQHfJSu9rwhJrsrT423h6Ma2nuZ_M1KGM6aogYkAztnpd975BLZ7KnB1xyo01G3XjxgKFFHCEepxfMQgU7y7r27jfO_P_Q0dXE1c4osP82Pw2Ok=w1000-h600-no' style='max-width:250px' />
                                    <h2 class='inline m-L'><b>GC Classic | Recuperacion de contraseña</b></h2>
                                    <br />
                            
                                    <span class='bold'> $nombreuser</span>, tu contraseña fue modificada, en caso que no fuiste tú, pongase en contacto con gcclassic2018@gmail.com <br />
                                    <br />
                                    Su nueva contraseña es:  <span class='bold'> $pass</span><br />
                                    <br />
                                    Le recomendamos que al iniciar sesion cambie su contraseña para mayor seguridad
                                    <br />
                                    Modificada el $fecha  alas  $hora
                            
                                    <h4 class=bold>Atentamente:</h4>
                                    <span class=grey>Equipo de GC-classic </span><br />
                                    Saludos.<br />  
                                </div>
                                </div>  
                            </body>
                            ";  
                            
                            ; 

                            //Comprobamos el envio.
                            if(!$mail->send()) {                    
                                Page::showMessage(3, "Ocurrió un error inesperado con él envió del correo electrónico" , null);
                            
                            } else {
                                if($cliente->setClave($pass)){
                                    if($cliente->changePassword()){
                                        Page::showMessage(1, "Se envio correctamente el correo electrónico." , "login.php");
                                    }else{
                                        Page::showMessage(2,"contraseña incorrecta","recovery_password.php");
                                    }
                                }
                               
                            }  

                            
                    }else{

                    }
                }else{
                    Page::showMessage(2, "El correo ingresado no existe en nuestros registros." , "recovery_password.php");
                }
                
        }
    }catch(Exception $error){
        Page::showMessage(2, $error->getMessage(), null);
    }
    require_once("../../app/views/dashboard/cuenta/recovery_password.php");
?>