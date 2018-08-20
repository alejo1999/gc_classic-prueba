<link rel="stylesheet" type="text/css" href="../web/css/login_public.css">
<div class = "row espacio ">
    <form method='post' autocomplete="off">
        <div class=" col s12 m4 offset-m4 white-text opacidad center bordeado"> 
        <h3>Iniciar Sesión</h3> 
        <div class="input-field">
        <i class='material-icons prefix'>email</i>
        <input id="correo" type="text" name="correo" value='<?php print($cliente->getCorreo()) ?>' required>
        <label class=" white-text" for="correo">Correo electronico</label>
        </div>
        <div class="input-field">
        <i class='material-icons prefix'>security</i>
        <input id="clave" type="password" name="clave" value='<?php print($cliente->getClave()) ?>' required>
        <label class=" white-text" for="clave">Contraseña</label>
        </div>
        <div class="col s12 m12 l12"><button  type='submit' name='iniciar' class="waves-effect waves-light btn">Iniciar Sesión</button></div>
        
        
        <a href="recuperar_contraseña.php"class="">¿Olvido su contraseña?</a>
        </div>
    </form>
</div>