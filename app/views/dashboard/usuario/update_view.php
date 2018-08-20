<form autocomplete='off' method='post'>
    <div class='row'>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>person</i>
          	<input id='nombres' type='text' name='nombres' class='validate' value='<?php print($admin->getNombres()) ?>' required/>
          	<label for='nombres'>Nombres</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>person</i>
            <input id='apellidos' type='text' name='apellidos' class='validate' value='<?php print($admin->getApellidos()) ?>' required/>
            <label for='apellidos'>Apellidos</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>email</i>
            <input id='correo' type='email' name='correo' class='validate' value='<?php print($admin->getCorreo()) ?>' required/>
            <label for='correo'>Correo</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>phone</i>
            <input id='telefono' type='text' name='telefono' class='validate' value='<?php print($admin->getTelefono()) ?>' required/>
            <label for='telefono'>Telefono</label>
        </div>
        <div class='col s12 m6 l4 offset-l2'>
            <p>
                <div class='switch'>
                    <span>Usuario Disponible:</span>
                    <label>
                        <i class='material-icons'>check_circle</i>
                        <input type='checkbox' name='estado' <?php print($admin->getEstado()?"checked":"") ?>/>
                        <span class='lever'></span>
                        <i class='material-icons'>cancel</i>
                    </label>
                </div>
            </p>
        </div>
        <div class='input-field col s12 m6 l4'>
        <button type='submit'  name='desbloquear' data-tooltip='Crear' class=" white-text waves-effect waves-light btn-flat # 66bb6a green aligera-2 tooltipped">Desbloquear cliente</button>
        </div>
        
    </div>
    <div class=' col s12 m4 l1 right'>
         <a href="index.php" data-tooltip='Cancelar' class="waves-effect waves-light tooltipped btn  # ef5350 red aligera-2"><i class=" material-icons">cancel</i></a>
        <button type='submit'  name='actualizar' data-tooltip='Crear' class=" waves-effect waves-light btn # 66bb6a green aligera-2 tooltipped"><i class=" material-icons">check_circle</i></button>
    </div>
</form>