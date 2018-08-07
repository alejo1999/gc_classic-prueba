<div class="row">
    <div class='col s12 m12 l12 '>
            <div class="col s12 m4 l3">
                <h4>Clientes</h4>
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
                        <button type='submit' name='buscar' class='espaciado btn waves-effect #1de9b6 teal accent-3 tooltipped' data-tooltip='Buscar por nombre o apellido'><i class='material-icons'>check_circle</i></button>
                </div>
            </form>
           
    </div>
</div> 


<table class=' highlight responsive-table centered striped'>
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
			<td>$row[nombre_cliente]</td>
            <td>$row[apellido]</td>
            <td>$row[correo]</td>
			<td>$row[telefono]</td>
            <td>
                <a href='update.php?id=$row[id_cliente]' class='btn-flat waves-effect waves-light'><i class='material-icons black-text'>create</i></a>
                <a href='compras.php?id=$row[id_cliente]' class=' btn-flat  waves-effect waves-light'><i class='material-icons black-text'>shop</i></a>
			</td>
		</tr>
		");
	}
	?>
    </tbody>
</table>