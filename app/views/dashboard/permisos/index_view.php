<div class="row">
    <div class='col s12 m12 l12 center'>
            
                <h4>Permisos por tipo de usuario</h4>
    </div>
</div> 

<table class=' highlight responsive-table centered '>
    <thead>
        <tr>
            <th>Nombre</th>
            
            <th>Accion</th> 
        </tr>
    </thead>
    <tbody>
    <?php
	foreach($data as $row){
		print("
		<tr>
			<td>$row[nombre_tipo]</td>
			
            <td>
                <a href='update.php?id=$row[id_tipo]' class='waves-effect waves-light'><i class='material-icons black-text'>create</i></a>
               
			</td>
		</tr>
		");
	}
	?>
    </tbody>
</table>