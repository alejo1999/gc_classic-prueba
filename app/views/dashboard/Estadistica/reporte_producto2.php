<?php
    require_once('Plantilla.php');
    require_once('../../../models/database.class.php');

    

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    

    $pdf->SetFillColor(118, 215, 196  );
    $pdf->SetFont('arial','B',12);
    $pdf->Cell(30,6,'Nombre',1,0,'C',1);

    $pdf->Output('i');
        
?> 