<div class='container'>
<?php
$categoria = $productos[0]['nombre_categoria'];
print("<h4 class='center brown-text'>$categoria</h4>");
print("<div class='row'>");
foreach($productos as $producto2){
    print("
    <!--Bloque de codigo para la forma en que se mostraran los productos-->
            <div class='card col s12 m4 l3 hoverable'>
                        <div class='card-image '>
                              <img class='activator'  src='../web/img/productos/$producto2[imagen]'  height='250px'>
                        </div>
                        <div class='card-content'>
                              <span class='card-title activator '>$producto2[nombre]</span>
                              <p>Precio (US$) $producto2[precio]</p>
                        </div>
                        <div class='card-action'>  
                              <p class='activator' style='color: rgb(40,140,100);'>Añadir al carrito</p>
                        </div>
                        <div class='card-reveal'>
                        <span class='card-title grey-text text-darken-4'>$producto2[nombre]<SMALL class='green-text'> GIFTCARD</SMALL>
                              <i class='material-icons right'>close</i>
                        </span>
                        <p>$producto2[descripcion]</p>
                              <h6>PRECIO: $producto2[precio]</h6>
                              <a style='color:rgb(40,40,40);' href='detalle_producto.php?id=$producto2[id_producto]' class=' waves-effect waves-dark  btn green lighten-3'>Agregar al carrito</a>
                        </div>
            </div>

    ");
}
?>
            <div class="col s12 m12 l12 center">
                  <?php
                  //seleccionar todo de la tabla usuarios
                  $resultado=$producto->getCategoriaProductos();

                  //Contar el total de registros
                  $total_registros = count($resultado);

                  //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
                  $total_paginas = ceil($total_registros / $por_pagina);

                  //link a primera pagina
                  print("<ul class='pagination'><li class='waves-effect'><a href='productos.php?id=".$producto->getCategoria()."&pagina=1'><i class='material-icons'>chevron_left</i></a></li>");

                  for ($i=1; $i<=$total_paginas; $i++) {

                  print("<li class='waves-effect teal lighten-2'><a href='productos.php?id=".$producto->getCategoria()."&pagina=".$i."'>".$i."</a></li>");
                  
                  };
                  
                  // link a la ultima pagina
                  print("<li class='waves-effect'><a href='productos.php?id=".$producto->getCategoria()."&pagina=$total_paginas'><i class='material-icons'>chevron_right</i></a></li></ul>");
                  
                  ?>
            </div>

      </div>
</div>


   
    

