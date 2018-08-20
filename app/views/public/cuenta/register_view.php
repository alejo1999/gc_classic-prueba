<link rel="stylesheet" type="text/css" href="../web/css/login_public.css">
<div class="container ">

    

    <div class="row espacio ">
        <form autocomplete='off' class="col s12 " method='post'>
            <div class="row opacidad white-text center bordeado">
            <h3>Crear Perfil</h3>
                <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="nombre" type="text" name="nombre" class="validate" value='<?php print($cliente->getNombres())?>' required>
                    <label class=" white-text" for="nombre">Nombre</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="apellidos" type="text" name="apellidos" class="validate" value='<?php print($cliente->getApellidos())?>' required>
                    <label class=" white-text" for="apellidos">Apellido</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="number" name="telefono" class="validate" value='<?php print($cliente->getTelefono())?>'required>
                    <label class=" white-text" for="icon_telephone">Telefono</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" name="correo" class="validate" value='<?php print($cliente->getCorreo())?>' required>
                    <label class=" white-text" for="email" data-error="incorrecto" data-success="correcto">Correo</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="password" type="password" class="validate" name='clave2' class='validate' value='<?php print($cliente->getClave()) ?>' required>
                    <label class=" white-text" for="password">Confirmar Contraseña</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="password" type="password" class="validate" name='clave1' class='validate' value='<?php print($cliente->getClave()) ?>' required>
                    <label class=" white-text" for="password"> Contraseña</label>
                </div>
                <div class="col s12 m6 l4 offset-l2      ">

                <div class="g-recaptcha" data-sitekey="6LcRq2YUAAAAAPf76su6EsO6DpraVU1GiROrB9Xl">
                </div>

                </div>
                <div class="col s12 m6 l6    ">
                        <p>
                            <input type="checkbox" id="test6"  required/>
                            <label for="test6"> <a class="waves-effect waves-light  white-text modal-trigger" href="#modal7">TERMINOS Y CONDICIONES</a></label>
                        </p>
                        <!-- Modal Structure -->
                        <div id="modal7" class="modal black-text">
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
                </div>

                <div class="col s12 m6 l12  ">
                    <button class="btn waves-effect waves-light" type="submit" name="registrar">Registrarme
                        
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>

