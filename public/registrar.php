<!DOCTYPE html>
<html lang="en">

<head>
    <!--Import Google Icon Font-->
    <link href='../web/css/material_icons.css' rel='stylesheet'>
    <link rel="stylesheet" href='../web/css/components.css'>
    <link rel="stylesheet" type="text/css" href="../web/css/img_responsives.css">
    <!--Import materialize.css-->
    <link type='text/css' rel='stylesheet' href='../web/css/materialize.min.css' media='screen,projection' />
    <link rel='stylesheet' href='../web/css/style.css'>

    <!--Let browser know website is optimized for mobile-->
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
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

            <h3>Crear Perfil</h3>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Nombre</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Apellido</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Telefono</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="validate">
                            <label for="email" data-error="incorrecto" data-success="correcto">Correo</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">date_range</i>
                            <input type="text" class="datepicker">
                            <label for="email">Fecha de Nacimiento</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">fingerprint</i>
                            <input id="first_name" type="tel" class="validate">
                            <label for="first_name">Documento</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password" type="password" class="validate">
                            <label for="password">Contraseña</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password" type="password" class="validate">
                            <label for="password">Confirmar Contraseña</label>
                        </div>
                        <div class="col s12 m6 l6 offset-l2 ">
                            <form action="#">
                                <label>Genero</label>
                                <p>
                                    <input name="group1" type="radio" id="test1" />
                                    <label for="test1">Masculino</label>
                                </p>
                                <p>
                                    <input name="group1" type="radio" id="test2" />
                                    <label for="test2">Femenino</label>
                                </p>

                         
                                <!-- Modal Trigger -->
                                <a class="waves-effect waves-light btn modal-trigger" href="#modal7">TERMINOS Y CONDICIONES</a>
                                
                                <!-- Modal Structure -->
                                <div id="modal7" class="modal">
                                  <div class="modal-content">
                                    <h4>TERMINOS Y CONDICIONES</h4>
                                    <p>El servicio de GC Clasic incluye funciones sociales e interactivas. El uso del servicio GC Classic depende de diferentes requisitos técnicos.

Su contrato con nosotros consta de estos Términos y condiciones de uso (“Términos”) y de nuestra Política de privacidad. (Los Términos, la Política de privacidad y otros términos que acepte, según lo dispuesto en la sección Contrato completo, se denominarán de ahora en adelante los “Contratos”.) Si desea revisar los términos de los Contratos, podrá encontrar la versión vigente de los Contratos en el sitio web de GCClassic. Confirme que ha leído y comprende los Contratos, que acepta estos Contratos y que los cumplirá. Si no está de acuerdo con los Contratos, o no puede cumplir con ellos, no utilice el servicio GCClassic ni su contenido.

Lea los Contratos detenidamente. Incluyen información importante sobre los servicios Spotify que le proporcionamos, así como información sobre cargos, impuestos y tarifas que le cobraremos. Los Contratos incluyen información sobre futuros cambios en los Contratos, controles de exportación, renovaciones automáticas, limitación de la responsabilidad, información privada, una renuncia de demanda colectiva y una resolución de disputa mediante arbitraje en vez de en un tribunal.

Toda información que proporcione durante el proceso de inscripción, podrá modificarla durante ese mismo proceso; para ello, deberá regresar a las pantallas anteriores y modificar los datos erróneos.</p>
                                  </div>
                                  <div class="modal-footer">
                                
                                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">ACEPTAR</a>
                                  </div>
                                </div>



                            </form>
                        </div>
                        <div class="col s12 m6 l6 offset-l9 ">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </MAIN>

    <FOOTER>
        <?php
            include("../app/views/footer.php");
            ?>
    </FOOTER>

    <?php
            include('../app/views/scripts.php')
        ?>
</body>

</html>