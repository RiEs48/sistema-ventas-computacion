<?php
require('fpdf.php');
date_default_timezone_set('America/La_Paz');
class PDF extends FPDF
{
// Cabecera de página
//Numeros de paginas
//SetTextColor(255,255,255);es RGB extraer colores con GIMP
//SetFillColor()
//SetDrawColor()
//Line(derecha-izquierda, arriba-abajo,ancho,arriba-abajo)
//Color line setDrawColor(61,174,233)
//GetX() || GetY() posiciones en cm
//Grosor SetLineWidth(1)
// SetFont(tipo{COURIER, HELVETICA,ARIAL,TIMES,SYMBOL, ZAPDINGBATS}, estilo[normal,B,I ,A], tamaño)
// Cell(ancho , alto,texto,borde,salto(0/1),alineacion,rellenar, link)
//AddPage(orientacion[PORTRAIT, LANDSCAPE], tamño[A3.A4.A5.LETTER,LEGAL],rotacion)
//Image(ruta, poscisionx,pocisiony,alto,ancho,tipo,link)
//SetMargins(10,30,20,20) luego de addpage
  
function Header()
{
  $this->Image('img/logo.png',-1,-1,85);
  $this->Image('img/producto.png',115,17,70);
  
  $this->SetY(60);
  $this->SetX(95);
  $this->SetFont('Arial','B',18);
  
  $this->SetTextColor(30,10,32);
  $this->Cell(89, 8, 'REPORTE DE PRODUCTOS',0,1);
  $this->SetY(65);
  $this->SetX(100);
  $this->SetFont('Arial','',10);
  $this->Cell(40, 8, 'MARVIN RIVAS ');
  
  $this->Ln(15);
  

}

function Footer()
{
     $this->SetFont('helvetica', 'B', 8);
        $this->SetY(-15);
        $this->Cell(95,5,utf8_decode('Página ').$this->PageNo().' / {nb}',0,0,'L');
        $this->Cell(95,5,date('d/m/Y | g:i:a') ,00,1,'R');
        $this->Line(10,287,200,287);
        $this->Cell(0,5,utf8_decode("Marvin Rivas"),0,0,"C");
        
}


}



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(15);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);


include ('../Model/conexion.php');

$consulta ="SELECT * FROM producto ";
$con= new Conexion();
$resultado=mysqli_query($con,$consulta);

$pdf->SetX(15);
$pdf->SetFillColor(210,57,57);
$pdf->SetDrawColor(255, 255, 255);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10, 12, utf8_decode('N°'),1,0,'C',1);
$pdf->Cell(30, 12, utf8_decode('Producto'),1,0,'C',1);
$pdf->Cell(80, 12, utf8_decode('Descripcion'),1,0,'C',1);
$pdf->Cell(15, 12, utf8_decode('Costo/C'),1,0,'C',1);
$pdf->Cell(15, 12, utf8_decode('Costo/V'),1,0,'C',1);
$pdf->Cell(10, 12, utf8_decode('stok'),1,0,'C',1);
$pdf->Cell(20, 12, utf8_decode('fecha'),1,1,'C',1);


$pdf->SetFont('Arial','',10);

$i=0;
foreach ($resultado as $key => $value) {

$pdf->SetFillColor(255,255,255);
$pdf->SetDrawColor(65, 61, 61);

$pdf->Cell(10, 17, $key+1,'B',0,'C',1);
$pdf->Cell(30, 17, utf8_decode($value['nombreproducto']),'B',0,'C',1);
$pdf->Cell(20, 17, utf8_decode($value['descripcion']),'B',0,'C',1);
$pdf->Cell(35, 17, utf8_decode($value['costocompra']),'B',0,'C',1);
$pdf->Cell(20, 17, utf8_decode($value['costoventa']),'B',0,'C',1);
$pdf->Cell(40, 17, utf8_decode($value['stock']),'B',0,'C',1);
$pdf->Cell(40, 17, utf8_decode($value['fecha']),'B',1,'C',1);

$pdf->Ln(2);


}

$pdf->Output();
?>