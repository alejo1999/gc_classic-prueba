<div class="row #00b0ff light-blue accent-3">
    <div class='container-login center z-depth-5 #81d4fa light-blue lighten-3'>
        <div style="margin:15px 0;">
            <i class="material-icons large white-text" >account_circle</i>
            <p class="white-text">Inicia sesión con tu cuenta de Usuario</p>   
        </div>
        <form autocomplete='off' method='post'>
            <div class="input-field col s12 m12 l12">
            <i class="material-icons prefix">account_box</i>
                <input id='correo' type="text" name='correo' class="validate" value='<?php print($object->getCorreo()) ?>' required>
                <label for="correo">Correo</label>
            </div>
            <div class="input-field col s12 l12">
            <i class="material-icons prefix">vpn_key</i>
                <input type="password" id="clave" name='clave' class="validate" value='<?php print($object->getClave()) ?>' required>
                <label for="clave">contraseña</label>
            </div>
            
            <div>
                <button type='submit' name='iniciar' class='btn-floating btn-large  waves-effect waves-light light-blue lighten-1'><i class="material-icons">send</i></button>
            </div>
            <!--boton de la ventana modal-->
            <a class='modal-trigger' href='#modal1'>Recuperar contraseña</a>
        </form>
    </div>
</div>