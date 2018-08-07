<div class="container">
    <div class="row">
        <div class="col s12 m12 l12">
            <H4>5 Productos mas vendidos</H4>
            <canvas id="myChart"  height="300"></canvas>
        </div>
    </div>
</div>


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
    
    </script>