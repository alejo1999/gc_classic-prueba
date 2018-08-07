<div class="row">
    <!-- creacion de celdas para dividri el contenido de las estadistcas y que este todo ordenado-->
    
    <!-- este es de los cuadros de informacion principal  -->
   
    
        <div class="col s12 m4 l4">
            <div class="card horizontal green darken-2 white-text">
                <div class="col s12 m12 l12">
                <?php
                print("
                    <div class='col s6 m6 l6 offset-l1'>
                    <h3>".$estadisticas->getVentasTotales()."</h3>
                    <p>Ventas</p>
                    </div>
                    <div class='col s6 m6 l5'>
                    <i class=' large material-icons'>shopping_cart</i>
                    </div>
                ");
                ?>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
        <div class="card horizontal blue lighten-1  white-text">
                <div class="col s12 m12 l12">
                    
                <?php
                print("
                    <div class='col s6 m6 l6 offset-l1'>
                    <h3>".$estadisticas->getComentariosT()."</h3>
                    <p>Comentarios</p>
                    </div>
                    <div class='col s6 m6 l5'>
                    <i class=' large material-icons'>question_answer</i>
                    </div>
                ");
                ?>  
                </div>
            </div>
        </div>

        
        <div class="col s12 m4 l4">
            <div class="card horizontal red darken-2 white-text">
                <div class="col s12 m12 l12">

                    <?php
                print("
                    <div class='col s6 m6 l6 offset-l1'>
                    <h3>".$estadisticas->getClientesTotales()."</h3>
                    <p>Clientes</p>
                    </div>
                    <div class='col s6 m6 l5'>
                    <i class=' large material-icons'>person_add</i>
                    </div>
                ");
                ?>  
                </div>
            </div>
        </div>
  

    <!-- zona de los graficos -->
    <!-- en esta parte esta la seccion de los graficos para el administrador que permite tomar decisiones importantes  dentro del sistema -->
        
        
            <div class="col s12 m6 l6  grey lighten-5  ">
            <h5>5 productos mas vendidos</h5>
                <canvas id="myChart"  height="200"></canvas>
            </div>

            <div class="col s12 m6 l6 grey lighten-5">
            <h5>5 productos mas Comentados</h5>
            <canvas id="myChart2"  height="200"></canvas>
            </div>
       

    <div class="col s12 m4 l4 ">
        <div class="card cyan darken-1">
            <div class="card-content white-text">
                <span class="card-title"></span>
                <p>5 productos mas vendidos </p>
            </div>
            <div class="card-action">
                <a href="grafico1.php">Visualizar</a>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4 ">
        <div class="card cyan darken-1">
            <div class="card-content white-text">
                <span class="card-title"></span>
                <p> Ventas por mes</p>
            </div>
            <div class="card-action">
                <a href="grafico2.php">Visualizar</a>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4 ">
        <div class="card cyan darken-1">
            <div class="card-content white-text">
                <span class="card-title"></span>
                <p>Grafico 1</p>
            </div>
            <div class="card-action">
                <a href="#">Visualizar</a>
            </div>
        </div>
    </div>
    
    
    
    <h5>Reportes</h5>

    <div class="col s12 m4 l4 ">
        <div class="card cyan darken-3">
            <div class="card-content white-text">
                <span class="card-title"></span>
                <p>Reporte de Productos</p>
            </div>
            <div class="card-action">
                <a href="../../app/views/dashboard/Estadistica/reporte_productos.php" target="_blank">Visualizar</a>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4 ">
        <div class="card cyan darken-3">
            <div class="card-content white-text">
                <span class="card-title"></span>
                <p>Ventas por rango de fecha</p>
            </div>
            <div class="card-action">
                <a class="modal-trigger" href="#modal1">Visualizar</a>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4 ">
        <div class="card cyan darken-3">
            <div class="card-content white-text">
                <span class="card-title"></span>
                <p>Ventas en general</p>
            </div>
            <div class="card-action">
                <a href="../../app/views/dashboard/Estadistica/reporte_ventas_generales.php" target="_blank">Visualizar</a>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4 ">
        <div class="card cyan darken-3">
            <div class="card-content white-text">
                <span class="card-title"></span>
                <p>Reporte 1</p>
            </div>
            <div class="card-action">
                <a href="#">Visualizar</a>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4 ">
        <div class="card cyan darken-3">
            <div class="card-content white-text">
                <span class="card-title"></span>
                <p>Reporte 1</p>
            </div>
            <div class="card-action">
                <a href="#">Visualizar</a>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4 ">
        <div class="card cyan darken-3">
            <div class="card-content white-text">
                <span class="card-title"></span>
                <p>Reporte 1</p>
            </div>
            <div class="card-action">
                <a href="#">Visualizar</a>
            </div>
        </div>
    </div>
</div>



<!-- Modal Structure -->
<!-- <div class="row"><div class="col s12 l12">
  <div class="container"><div class="row">
    <form method='post'>
    <h4 class='center'>Escoje el rango de fechas</h4>
    <div class="col s12 m6 l6">
        <input type="text" name="fecha1" placeholder="Fecha Inicio">
    </div>
    <div class="col s12 m6 l6">
        <input type="text" name="fecha2" placeholder="Fecha Fin">
    </div>
    
    </div></div>
    
  </div>
  <div class="col s12 l12">
    <a href="#!" class=" waves-effect waves-red btn-flat">Cancelar</a>
    <a  class="waves-effect waves-green btn-flat" name="reporte_rango">Aceptar</a>
    </form>
  </div></div> -->
  






<script>
    var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT detalle_factura.fk_id_producto, productos.nombre as nombresito, SUM(detalle_factura.cantidad) AS TotalVentas
                    FROM detalle_factura
                    INNER JOIN productos ON detalle_factura.fk_id_producto = productos.id_producto 
                    where detalle_factura.estadoventa = 1
                    GROUP BY detalle_factura.fk_id_producto
                    ORDER BY SUM(detalle_factura.cantidad) DESC
                    LIMIT 0 , 5";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[nombresito]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				label: 'Cantidad',
				data: [
					
					<?php
						$sql = "SELECT detalle_factura.fk_id_producto, productos.nombre as nombresito, SUM(detalle_factura.cantidad) AS TotalVentas
                        FROM detalle_factura
                        INNER JOIN productos ON detalle_factura.fk_id_producto = productos.id_producto 
                        where detalle_factura.estadoventa = 1
                        GROUP BY detalle_factura.fk_id_producto
                        ORDER BY SUM(detalle_factura.cantidad) DESC
                        LIMIT 0 , 5";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[TotalVentas]"); ?>, 
					<?php 
						}
					?>
				],
				backgroundColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				borderColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				hoverBackgroundColor: [
					'rgba(84, 94, 117, 0.8)',
					'rgba(93, 211, 158, 0.8)',
					'rgba(52, 138, 167, 0.8)',
					'rgba(120, 192, 224, 0.8)',
					'rgba(99, 173, 242, 0.8)',
					'rgba(120, 192, 224, 0.8)'
				],
				borderWidth: 1
			}]
		},
		options: {
			responsive : true,
			
		}
    }, 5000);
    
    var ctx = document.getElementById("myChart2").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT productos.nombre AS names , COUNT(valoracion.comentario) AS ordeni FROM valoracion
                    INNER JOIN productos ON valoracion.fk_id_producto = productos.id_producto 
                    GROUP BY valoracion.fk_id_producto ORDER BY ordeni DESC LIMIT 5";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[names]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				label: 'Cantidad',
				data: [
					
					<?php
						$sql = "SELECT productos.nombre , COUNT(valoracion.comentario) AS ordeni FROM valoracion
                        INNER JOIN productos ON valoracion.fk_id_producto = productos.id_producto 
                        GROUP BY valoracion.fk_id_producto ORDER BY ordeni DESC LIMIT 5";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[ordeni]"); ?>, 
					<?php 
						}
					?>
				],
				backgroundColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				borderColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				hoverBackgroundColor: [
					'rgba(84, 94, 117, 0.8)',
					'rgba(93, 211, 158, 0.8)',
					'rgba(52, 138, 167, 0.8)',
					'rgba(120, 192, 224, 0.8)',
					'rgba(99, 173, 242, 0.8)',
					'rgba(120, 192, 224, 0.8)'
				],
				borderWidth: 1
			}]
		},
		options: {
			responsive : true,
			
		}
    }, 5000);
    
    var ctx = document.getElementById("myChart3").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT detalle_factura.fk_id_producto, productos.nombre as nombresito, SUM(detalle_factura.cantidad) AS TotalVentas
                    FROM detalle_factura
                    INNER JOIN productos ON detalle_factura.fk_id_producto = productos.id_producto 
                    where detalle_factura.estadoventa = 1
                    GROUP BY detalle_factura.fk_id_producto
                    ORDER BY SUM(detalle_factura.cantidad) DESC
                    LIMIT 0 , 5";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[nombresito]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				label: 'Cantidad',
				data: [
					
					<?php
						$sql = "SELECT detalle_factura.fk_id_producto, productos.nombre as nombresito, SUM(detalle_factura.cantidad) AS TotalVentas
                        FROM detalle_factura
                        INNER JOIN productos ON detalle_factura.fk_id_producto = productos.id_producto 
                        where detalle_factura.estadoventa = 1
                        GROUP BY detalle_factura.fk_id_producto
                        ORDER BY SUM(detalle_factura.cantidad) DESC
                        LIMIT 0 , 5";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[TotalVentas]"); ?>, 
					<?php 
						}
					?>
				],
				backgroundColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				borderColor: [
					'rgba(84, 94, 117, 1)',
					'rgba(93, 211, 158, 1)',
					'rgba(52, 138, 167, 1)',
					'rgba(120, 192, 224, 1)',
					'rgba(99, 173, 242, 1)',
					'rgba(120, 192, 224, 1)'
				],
				hoverBackgroundColor: [
					'rgba(84, 94, 117, 0.8)',
					'rgba(93, 211, 158, 0.8)',
					'rgba(52, 138, 167, 0.8)',
					'rgba(120, 192, 224, 0.8)',
					'rgba(99, 173, 242, 0.8)',
					'rgba(120, 192, 224, 0.8)'
				],
				borderWidth: 1
			}]
		},
		options: {
			responsive : true,
			
		}
	}, 5000);
</script>

