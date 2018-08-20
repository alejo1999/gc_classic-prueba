<form autocomplete='off' method='post'>
    <div class='row'>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>person</i>
          	<input id='nombre' type='text' name='nombre' class='validate' value='<?php print($usuario->getNombres()) ?>' required/>
          	<label for='nombre'>Nombres</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>person</i>
            <input id='apellidos' type='text' name='apellidos' class='validate' value='<?php print($usuario->getApellidos()) ?>' required/>
            <label for='apellidos'>Apellidos</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>email</i>
            <input id='correo' type='email' name='correo' class='validate' value='<?php print($usuario->getCorreo()) ?>' required/>
            <label for='correo'>Correo</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>phone</i>
            <input id='telefono' type='text' name='telefono' class='validate' value='<?php print($usuario->getTelefono()) ?>' required/>
            <label for='telefono'>Telefono</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>security</i>
            <input id='clave1' type='password' name='clave1' class='validate' value='<?php print($usuario->getClave()) ?>' required/>
            <label for='clave1'>Clave</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>security</i>
            <input id='clave2' type='password' name='clave2' class='validate' value='<?php print($usuario->getClave()) ?>' required/>
            <label for='clave2'>Confirmar clave</label>
        </div>
    </div>
    <div class='row center-align'>
 	    <button type='submit' name='registrar' class='btn waves-effect blue'><i class='material-icons'>send</i></button>
    </div>
</form>

