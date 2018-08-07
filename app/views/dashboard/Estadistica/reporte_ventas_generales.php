<?php
    
    require_once('../../../libraries/fpdf/fpdf.php');
    require_once('../../../models/database.class.php');

    class PDF extends FPDF 
    {
        function Header(){
            $this->SetFont('Arial','B',15);
 
            $this->Line(10,10,200,10);
            $this->Line(10,25.5,200,25.5);
            
            
            $this->Cell(30,25,'',0,0,'C',$this->Image('../../../../web/img/logo/logo_medium_green.png', 10,10, 30));
            $this->Cell(141,20,'Ventas Por Rango de Fechas',0,0,'C');
            $this->SetFont('Arial','',10);
            $this->SetXY(181,8);
            $this->Cell(20,10,'Generado el' . date(' d') . '/' . date('m') . '/' . date('y'),0,0,'R');
            $this->SetXY(151,21);
            $this->Cell(50,5,'gcclassic2018@gmail.com',0,0,'R');
            $this->SetXY(151,16);
            $this->Cell(50,5,'+503 2233-4455',0,0,'R');
            
           
            $this->Ln(25);
            
        }

        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('arial','I',9);
            $this->Cell(0,10,'pagina '.$this->PageNo().'/{nb}',0,0,'C');
        }

        function FancyTable($cabecera, $datos)
        {   
            $this->SetFillColor(72, 201, 176);
            $this->SetTextColor(44, 62, 80);
            $this->SetDrawColor(28, 40, 51  );
            $this->SetLineWidth(.3);
            $this->SetFont('','B');
            // Anchuras de las columnas
            $w = array(45, 30, 30, 35, 25,30);
            // Cabeceras
            for($i=0;$i<count($cabecera);$i++)
                $this->Cell($w[$i],7, $cabecera[$i] ,1,0,'C',true);

            $this->Ln();
            // Datos
            $this->SetFillColor(224,235,255);
            $this->SetTextColor(0);
            $this->SetFont('');
            foreach($datos as $row)
            {
                $this->Cell($w[0],7,$row['nombre'],'LRB');
                $this->Cell($w[1],7,$row['cantidad'],'LRB');
                $this->Cell($w[2],7,$row['subtotal'],'LRB');
                $this->Cell($w[3],7,$row['nombre_cliente'],'LRB');
                $this->Cell($w[4],7,$row['telefono'],'LRB');
                $this->Cell($w[5],7,$row['fecha'],'LRB');
                
                $this->Ln();
            }
            // L�nea de cierre
            $this->Cell(array_sum($w),0,'','T');
        }
    }

    $pdf = new PDF();

    $cabecera = array('Nombre', 'Cantidad', 'Subtotal', 'nombre_cliente', 'Telefono', 'fecha');
    $fecha1 = ($_GET['fecha1']);
    $fecha2 = ($_GET['fecha2']);
    $sql="SELECT productos.nombre, detalle_factura.cantidad,detalle_factura.subtotal,cliente.nombre_cliente,cliente.telefono,venta.fecha
    FROM detalle_factura
    INNER JOIN productos ON productos.id_producto = detalle_factura.fk_id_producto
    INNER JOIN cliente ON cliente.id_cliente = detalle_factura.fk_id_cliente 
    INNER JOIN venta ON venta.id_venta = detalle_factura.fk_id_venta
    WHERE detalle_factura.estadoventa = 1 AND venta.fecha BETWEEN $fecha1 AND $fecha2 ";
    $params = array(null);
    $datos = Database::getRows($sql, $params);


    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFont('Arial','',12);
    $pdf->FancyTable($cabecera,$datos);
    $pdf->Output('i');

?>
