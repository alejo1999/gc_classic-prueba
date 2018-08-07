<!--- Informacion del carrito y mis productos -->
<!--Creo un contenedor para la informacion del carrito -->
<div class="container">
    <div class="row">
        <h2 style="color: rgb(30,140,100); font-family: calibri light">Mi Carrito</h2>

<!--Aqui empieza la tabla de carrito -->
<table class=' highlight responsive-table centered ' >
    <thead>
        <tr>
        
            <th>Imagen</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Subtotal</th>
            <th>Accion</th> 
        </tr>
    </thead>
    <tbody>
    <?php
	foreach($carrito as $carrito2){
        
        print("
        
        <tr>
            
			<td><img src='../web/img/productos/$carrito2[imagen]' class='' width='100' height='100'></td>
            <td>$carrito2[nombre]</td>
            <td>$carrito2[cantidad]</td>
            <td>$carrito2[precio]</td>
            <td>$carrito2[subtotal]</td>
            
            <td>
                <a href='updatecarrito.php?id=$carrito2[id_detalle]' class='waves-effect waves-light modal-trigger'><i class='material-icons black-text'>create</i></a>
                <a href='borrarcarrito.php?id=$carrito2[id_detalle]' id='space' class='waves-effect waves-light'href='#'><i class='material-icons red-text'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>
    </tbody>
</table>

    <?php
    
    print("
    <div class='divider'></div>
    <!--Aqui termina la tabla de productos -->
      <div class='col s12 m12 l12'>
          <div class='col s12 m6 offset-m7 l6 offset-l9'>
              <h5>Metodo de pago</h5>
              
              
              <input name='group1' type='radio1' id='test1' />
              <label for='test1'><img src='../web/img/metodo_de_pago/paypal_log.png' width='100px'></label>
              
              
              <input name='group1' type='radio1' id='test2' />
              <label for='test2'><img src='../web/img/metodo_de_pago/tarjeta-de-credito.png ' width='100px'></label>
              
              
              <h4 style='color: rgb(30,140,100); font-family: calibri light; margin-top: 40px;' >Total: ".$detalle->getTotal()."</h4>
                  
    ");
        ?>
            <form method='post'>
        <button type='submit'  name='pagofinal' class=' waves-effect waves-light btn modal-trigger' >Pago final<i class='material-icons'></i></button>
            </form>
          </div>
      </div>
      



    


  </div>
  </div>
</div>

