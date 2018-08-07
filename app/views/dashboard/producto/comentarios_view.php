
    <h4>Comentarios y valoraciones </h4>

    <table class=' highlight responsive-table centered '>
    <thead>
        <tr>
            <th>Nombre Cliente</th>
            <th>Valoracion</th>
            <th>Comentario</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
    <?php
	foreach($data as $row){
		print("
		<tr>
			<td>$row[nombre_cliente]</td>
            <td>$row[valoracion] Estrellas</td>
            <td>$row[comentario]</td>
            <td><a href='deletecomentario.php?id=$row[id_valoracion]' id='space' class='waves-effect waves-light'href='#'><i class='material-icons red-text'>delete</i></a></td>
		</tr>
		");
	}
	?>
    </tbody>
</table>
