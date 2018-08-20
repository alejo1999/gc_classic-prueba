<link rel="stylesheet" type="text/css" href="../../web/css/dashboard_login.css">
<div class="row ">
    <div class='container-login center z-depth-5 transparent bordeado2'>
        <div >
            <i class="material-icons large white-text" >vpn_key </i>
            <p class="white-text">Ingresa el correo de la cuenta</p>   
        </div>
        <form method='post' autocomplete="off">
            <div class="input-field col s12 m12 l12 white-text">
            <!-- <i class="material-icons ">account_box</i> -->
                <input id='correo' type="text" name='correo' class="validate" value='<?php print($cliente->getCorreo()) ?>' required>
                <label for="correo   "class="white-text" >Correo</label>
            </div>
            
            <div class=" input-field col s12 m12 l12     center">
                 <button type='submit' name='Recuperar' class='btn bordeado waves-effect waves-light white black-text'>Recuperar Contraseña</button>
            </div>
            <!--boton de la ventana modal-->
            
        </form>
    </div>
</div>