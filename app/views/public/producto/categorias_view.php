<div class='container'>
    <h4 class='center'>Nuestras categorias</h4>
    <div class='row'>
    <?php
    foreach($categorias as $categoria){
        print("
        <div class='col s12 m6 l4'>
          <div class='card #78909c teal lighten-2'>
            <div class='card-content white-text'>
              <span class='card-title'>$categoria[nombre_categoria]</span>
              <p>$categoria[descripcion_categoria]</p>
            </div>
            <div class='card-action'>
              <a href='productos.php?id=$categoria[id_categoria]'>Ver Tarjetas</a>
            </div>
          </div>
        </div>
      
        ");
    }
    ?>
    </div>
</div>