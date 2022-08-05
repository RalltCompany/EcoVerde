<?php
require('fpdf.php');
 
class PDF extends FPDF
{

    function Header()
    {
        // Logo
        
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        
        // Title
        $this->Cell(60,25,'Reporte de Productos',1,0,'C');
        $this->Image('../images/logoresponsive.png',165,8,27);
        // Line break
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        
    }


    function cabeceraHorizontal($cabecera)
    {
        $this->SetXY(2, 40);
        $this->SetFont('Arial','B',11);
        foreach($cabecera as $fila)
        {
            //Atención!! el parámetro valor 0, hace que sea horizontal
            $this->Cell(34,7, utf8_decode($fila),1, 0 , 'L' );
            
        }
    }
 
    function datosHorizontal($datos)
    {
        $this->SetXY(2,47);
        $this->SetFont('Arial','',10);
        //Siendo un array tipo: $datos => $fila
        //Significa que $datos tiene 'nombre' 'apellido' 'matricula'
        //$fila tiene cada valor de los antes mencionados
        foreach($datos as $fila)
        {
            $this->Cell(34,7, utf8_decode($fila['codigo']),1, 0 , 'L' );
            $this->Cell(34,7, utf8_decode($fila['nombre']),1, 0 , 'L' );
            $this->Cell(34,7, utf8_decode($fila['disponibilidad']),1, 0 , 'L' );
            $this->Cell(34,7, utf8_decode($fila['familia']),1, 0 , 'L' );
            $this->Cell(34,7, utf8_decode($fila['precio']),1, 0 , 'L' );
            $this->Cell(34,7, utf8_decode($fila['mes_de_plantado']),1, 0 , 'L' );
            $this->Ln();//Salto de línea para generar otra fila
            $this->SetX(2);
        $this->SetFont('Arial','',10);
        }
    }
 
    //Integrando cabecera y datos en un solo método
    function tablaHorizontal($cabeceraHorizontal, $datosHorizontal)
    {
        $this->cabeceraHorizontal($cabeceraHorizontal);
        $this->datosHorizontal($datosHorizontal);
    }
 
} // FIN Class PDF
?>