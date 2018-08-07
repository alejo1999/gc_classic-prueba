<div class="container">
    <div class="row">
        <div class="col s12 m12 l12">
            <H4>Ventas por mes </H4>
            <canvas id="myChart2"  height="300"></canvas>
        </div>
    </div>
</div>


<script>
    var ctx = document.getElementById("myChart2").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				
				<?php
					$sql = "SELECT MONTH(venta.fecha) , meses.nombre_mes  AS meses FROM venta
                    INNER JOIN meses ON meses.ID_mes = MONTH(venta.fecha)
                    GROUP BY MONTH(venta.fecha)";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					foreach($result as $row){
				?> 
					'<?php print("$row[meses]"); ?>', 
				<?php 
					}
				?>
			],
			datasets: [{
				label: 'Cantidad',
				data: [
					
					<?php
						$sql = "SELECT MONTH(venta.fecha) AS cantidades , meses.nombre_mes  FROM venta
                        INNER JOIN meses ON meses.ID_mes = MONTH(venta.fecha)
                        GROUP BY MONTH(venta.fecha)";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						foreach($result as $row){
					?> 
						<?php print("$row[cantidades]"); ?>, 
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
            
            scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
			
		}
    }, 5000);
    
    </script>