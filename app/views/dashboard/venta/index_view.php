<div class="row">
    <div class='col s12 m12 l12 '>
            <div class="col s12 m4 l3">
                
            </div>
            <form method='post'>
                <div class="col s10 m5 l5 ">
                        
                            <div class="input-field">
                                <i class="material-icons prefix">search</i>
                                <input id="icon_prefix" name='busqueda' type="text" class="validate">
                                <label for="icon_prefix">buscar</label>
                            </div>
                        
                </div>
                <div class="col s2 m1 l2 ">
                        <button type='submit' name='buscar' class='espaciado btn waves-effect #1de9b6 teal accent-3 tooltipped' data-tooltip='Buscar por nombre o descripción'><i class='material-icons'>check_circle</i></button>
                </div>
            </form>
           
    </div>
</div> 

<table class=' highlight responsive-table centered '>
    <thead>
        <tr>
            <th>No.Venta</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>fecha</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Sub-Total</th>
            
        </tr>
    </thead>
    <tbody>
    <?php
	foreach($data as $row){
		print("
		<tr>
			<td>$row[venta]</td>
            <td>$row[nombre_cliente]</td>
            <td>$row[apellido]</td>
            <td>$row[correo]</td>
            <td>$row[fecha]</td>
            <td>$row[nombre]</td>
            <td>$row[precio]</td>
            <td>$row[cantidad]</td>
            <td>$row[subtotal]</td>
		</tr>
		");
	}
	?>
    </tbody>
</table>