<link rel="stylesheet" type="text/css" href="../../web/css/dashboard_login.css">
<div class="row ">
    <div class='container-login center z-depth-5 transparent bordeado2'>
        <div >
            <i class="material-icons large white-text" >account_circle</i>
            <p class="white-text">Inicia sesión con tu cuenta de Administrador</p>   
        </div>
        <form autocomplete='off' method='post' autocomplete="off">
            <div class="input-field col s12 m12 l12 white-text">
            <!-- <i class="material-icons ">account_box</i> -->
                <input id='correo' type="text" name='correo' class="validate" value='<?php print($object->getCorreo()) ?>' required>
                <label for="correo   "class="white-text" >Correo</label>
            </div>
            <div class="input-field col s12 l12 white-text">
            <!-- <i class="material-icons prefix">vpn_key</i> -->
                <input type="password" id="clave" name='clave' class="validate" value='<?php print($object->getClave()) ?>' required>
                <label for="clave" class="white-text">Contraseña</label>
            </div>
            
            <div class=" input-field col s12 m12 l6">
                <button type='submit' name='iniciar' class='btn bordeado waves-effect waves-light white black-text'>Iniciar sesion</button>
                
            </div>
            <div class=" input-field col s12 m12 l6 ">
                 <button type='submit' name='iniciar' class='btn bordeado waves-effect waves-light white black-text'>Recuperar Contraseña</button>
            </div>
            <!--boton de la ventana modal-->
            <a class='modal-trigger' href='#modal1'>Recuperar contraseña</a>
        </form>
    </div>
</div>