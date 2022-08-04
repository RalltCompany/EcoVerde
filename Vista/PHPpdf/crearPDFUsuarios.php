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
        $this->Cell(60,25,'Reporte de Usuarios',1,0,'C');
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
        $this->SetXY(10, 40);
        $this->SetFont('Arial','B',12);
        foreach($cabecera as $fila)
        {
            //Atención!! el parámetro valor 0, hace que sea horizontal
            $this->Cell(32,7, utf8_decode($fila),1, 0 , 'L' );
            
        }
    }
 
    function datosHorizontal($datos)
    {
        $this->SetXY(10,47);
        $this->SetFont('Arial','',10);
        //Siendo un array tipo: $datos => $fila
        //Significa que $datos tiene 'nombre' 'apellido' 'matricula'
        //$fila tiene cada valor de los antes mencionados
        foreach($datos as $fila)
        {
            $this->Cell(32,7, utf8_decode($fila['ci']),1, 0 , 'L' );
            $this->Cell(32,7, utf8_decode($fila['nombre']),1, 0 , 'L' );
            $this->Cell(32,7, utf8_decode($fila['apellido']),1, 0 , 'L' );
            $this->Cell(32,7, utf8_decode($fila['celular']),1, 0 , 'L' );
            $this->Cell(32,7, utf8_decode($fila['email']),1, 0 , 'L' );
            $this->Cell(32,7, utf8_decode($fila['tipo']),1, 0 , 'L' );
            $this->Ln();//Salto de línea para generar otra fila
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