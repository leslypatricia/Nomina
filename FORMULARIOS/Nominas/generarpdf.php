
<?php
require('fpdf182/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(20);
    // Título
    $this->Cell(250,10,'Nomina General Mensual',0,0,'C');

    // Salto de línea
    $this->Ln(20);
	$this->cell(15,5, 'Codigo',1,0, 'C',0);
	$this->cell(35,5, 'Nombre',1,0, 'C',0);
	$this->cell(25,5, 'Sueldo base',1,0, 'C',0);
	$this->cell(21,5, 'Cant Horas',1,0, 'C',0);
	$this->cell(18,5, 'Costo U',1,0, 'C',0);
	$this->cell(20,5, 'Total Pagar',1,0, 'C',0);
    $this->cell(30,5, 'Total Devengado',1,0, 'C',0);
	$this->cell(32,5, 'Total Deducciones',1,0, 'C',0);
	$this->cell(32,5, 'Total Pagos Extras',1,0, 'C',0);
	$this->cell(28,5, 'Total aumento'	,1,0, 'C',0);
	$this->cell(28,5, 'Sueldo Neto',1,1, 'C',0);

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
	
    // Arial italic 8
    $this->SetFont('Arial','I',15);

    // Número de página
    $this->Cell(0,10,utf8_decode('Page ').$this->PageNo().'/{nb}',0,0,'C');


}
}
$mysqli= new mysqli("localhost","root", "","nominas");

  $sql="SELECT * FROM nominageneral  where FormaPago='Mensual'";
  $res= $mysqli->query($sql);
  
  $pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('a3');
$pdf->SetFont('Arial','',10);

	while($mostrar = $res->fetch_assoc()){
  

		$pdf->cell(15,5, $mostrar['Cod_empleados'],1,0, 'C',0);
		$pdf->cell(15,5, utf8_decode($mostrar['Primer_Nombre']),1,0, 'C',0);
		$pdf->cell(20,5, utf8_decode($mostrar['Primer_Apellido']),1,0, 'C',0);
		$pdf->cell(25,5, $mostrar['Sueldo_base'],1,0, 'C',0);
		$pdf->cell(21,5, $mostrar['Cant_Horas'],1,0, 'C',0);
		$pdf->cell(18,5, $mostrar['Costo_U'],1,0, 'C',0);
	    $pdf->cell(20,5, $mostrar['TotalP_HE'],1,0, 'C',0);
		$pdf->cell(30,5, $mostrar['Total_Devengado'],1,0, 'C',0);
		$pdf->cell(32,5, $mostrar['Total_Deducciones'],1,0, 'C',0);
		$pdf->cell(32,5, $mostrar['Total_PagosComplementarios'],1,0, 'C',0);
	    $pdf->cell(28,5, $mostrar['Total_aumento']	,1,0, 'C',0);
	    $pdf->cell(28,5, $mostrar['SUELDO_NETO_Pagar'],1,1, 'C',0);
		
}
$pdf->Cell(10,10,'',0,1,'');
$pdf->Cell(10,10,'',0,1,'C');
$pdf->Cell(10,10,'',0,1,'C');
$pdf->Cell(0,0, 'Firma',0, 1,'C');


$pdf->Output();


?>
