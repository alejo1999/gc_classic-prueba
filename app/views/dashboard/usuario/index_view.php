<div class="row">
    <div class='col s12 m12 l12 '>
            <div class="col s12 m4 l3">
                <h4>Usuario</h4>
            </div>
            <form method='post'>
                <div class="col s7 m5 l5 ">
                        
                            <div class="input-field">
                                <i class="material-icons prefix">search</i>
                                <input id="buscar" name='busqueda' type="text" class="validate">
                                <label for="buscar">buscar</label>
                            </div>
                        
                </div>
                <div class="col s2 m1 l2 ">
                        <button type='submit' name='buscar' class='espaciado btn waves-effect #1de9b6 teal accent-3 tooltipped' data-tooltip='Buscar por nombre o descripción'><i class='material-icons'>check_circle</i></button>
                </div>
            </form>
            <div class='col s3 m2 l2   '>
                <!-- boton de agregar nuevos productos-->
                        <a class=" espaciado btn-floating waves-effect waves-light light-blue lighten-1 right tooltipped" data-tooltip='Crear nuevo administrador' href="create.php">
                        <i class="large material-icons">add</i>
                        </a>
            </div>
    </div>
</div> 


<table class=' highlight responsive-table centered '>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Accion</th> 
        </tr>
    </thead>
    <tbody>
    <?php
	foreach($data as $row){
		print("
		<tr>
			<td>$row[nombre]</td>
            <td>$row[apellido]</td>
            <td>$row[correo]</td>
			<td>$row[telefono]</td>
            <td>
                <a href='update.php?id=$row[id_usuario]' class='waves-effect waves-light'><i class='material-icons black-text'>create</i></a>
                <a href='delete.php?id=$row[id_usuario]' id='space'onclick='borrar_producto()' class='waves-effect waves-light'href='#'><i class='material-icons red-text'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>
    </tbody>
</table>