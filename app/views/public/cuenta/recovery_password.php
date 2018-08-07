<link rel="stylesheet" type="text/css" href="../web/css/login_public.css">
<div class = "row espacio">
    <form method='post' autocomplete="off">
        <div class=" col s12 m4 offset-m4 white-text opacidad center"> 
        <h3>Recuperar Contraseña</h3> 
        <div class="input-field">
        <i class='material-icons prefix'>email</i>
        <input id="correo" type="text" name="correo" value='<?php print($cliente->getCorreo()) ?>' required>
        <label class=" white-text " autocomplete="off" for="correo">Ingresa el correo de la cuenta</label>
        </div>
        <button  type='submit' name='Recuperar' class=" teal accent-4 waves-effect waves-light btn center">Restablecer</button>
        
        </div>
    </form>
</div>