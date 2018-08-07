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
            $this->Cell(141,20,'Reporte de productos',0,0,'C');
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
            $w = array(50, 40, 35, 30, 30);
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
                $this->Cell($w[1],7,$row['nombre_categoria'],'LRB');
                $this->Cell($w[2],7,$row['nombre_proveedor'],'LRB');
                $this->Cell($w[3],7,$row['existencia'],'LRB');
                $this->Cell($w[4],7,'$'.$row['precio'],'LRB');
                
                $this->Ln();
            }
            // L�nea de cierre
            $this->Cell(array_sum($w),0,'','T');
        }
    }

    $pdf = new PDF();

    $cabecera = array('Nombre', 'Categoria', 'Proveedor', 'Existencia', 'Precio');

    $sql="SELECT   productos.nombre, categoria.nombre_categoria,proveedor.nombre_proveedor,  productos.existencia ,productos.precio 
    FROM productos 
    INNER JOIN categoria ON productos.fk_id_categoria = categoria.id_categoria 
    INNER JOIN proveedor ON productos.fk_id_proveedor = proveedor.id_proveedor
    ORDER BY nombre";
    $params = array(null);
    $datos = Database::getRows($sql, $params);


    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFont('Arial','',12);
    $pdf->FancyTable($cabecera,$datos);
    $pdf->Output('i');

?>
