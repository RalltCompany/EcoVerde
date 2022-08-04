<?php	
require("fpdf.php");
class PDF extends FPDF{
    function Header(){
           
        	
        $pdf = new PDF('P', 'cm','letter');
        	
        $this->SetFont('Arial', '', 24);
        $this->Image("logo.png", 1, 1);
        	
        $this->Cell(9);
        $pdf->Cell(20,10,'Title',1,1,'C');
    }
}
$pdf = new FPDF('P', 'cm','letter');



	
$pdf->SetAuthor("Ecoverde", true);

	
$pdf->SetTitle("Documento PDF de prueba", true);

	
$pdf->AddPage();



	
$pdf->Output();

?>