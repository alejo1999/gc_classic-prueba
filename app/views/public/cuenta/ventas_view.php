<div class="container">
<h4 class='center'>Mis Compras</h4>
    <table class=' highlight responsive-table centered ' id='mi_tabla'>
        <thead>
            <tr>
                <th>fecha</th>
                <th>Imagen</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($data as $row){
            print("
            <tr>
                <td>$row[fecha]</td>
                <td><img src='../web/img/productos/$row[imagen]' class='' width='100' height='100'></td>
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
</div>
