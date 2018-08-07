<div class="container">
<div class="row">
<div class="col s12 m6 l4 offset-l4">
<div class="card cyan darken-2">
    <form method="post">
    <div class="card-content white-text">
        <p><h4 for='cantidad'>Nueva Cantidad</h4></p>
        <input id='cantidad' type='number' name='cantidad' min='1' max='".$producto->getExistencia()."' value='<?php print($detalle->getCantidad()) ?>' class='validate' required>
        </div>
    <div class="card-action">
         <button type='submit' name='actualizar' class='btn waves-effect waves-light green tooltipped' data-tooltip='Agregar al carrito'>Actualizar carrito</button>

    </div>
    </form>
</div>

</div>
</div>
</div>