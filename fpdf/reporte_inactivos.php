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
  $this->Image('img/usuarios.jpg',115,17,70);
  
  $this->SetY(60);
  $this->SetX(65);
  $this->SetFont('Arial','B',18);
  
  $this->SetTextColor(30,10,32);
  $this->Cell(89, 8, 'REPORTE DE USUARIOS INACTIVOS',0,1);
  $this->SetY(65);
  $this->SetX(100);
  $this->SetFont('Arial','',10);
  $this->Cell(40, 8, 'Mauricio Calderon Ramirez');
  
  $this->Ln(15);
  

}

function Footer()
{
     $this->SetFont('helvetica', 'B', 8);
        $this->SetY(-15);
        $this->Cell(95,5,utf8_decode('Página ').$this->PageNo().' / {nb}',0,0,'L');
        $this->Cell(95,5,date('d/m/Y | g:i:a') ,00,1,'R');
        $this->Line(10,287,200,287);
        $this->Cell(0,5,utf8_decode("Mauri Calderon"),0,0,"C");
        
}


}



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(15);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);


require '../conex.php';
$consulta ="SELECT * FROM usuarios";
$resultado=mysqli_query($con,$consulta);

$pdf->SetX(20);
$pdf->SetFillColor(210,57,57);
$pdf->SetDrawColor(255, 255, 255);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10, 12, utf8_decode('N°'),1,0,'C',1);
$pdf->Cell(70, 12, utf8_decode('Empleado'),1,0,'C',1);
$pdf->Cell(30, 12, utf8_decode('usuario'),1,0,'C',1);
$pdf->Cell(10, 12, utf8_decode('Pas'),1,0,'C',1);
$pdf->Cell(25, 12, utf8_decode('nivel'),1,0,'C',1);
$pdf->Cell(15, 12, utf8_decode('estado'),1,1,'C',1);

$pdf->SetFont('Arial','',10);

$i=0;
while($row = $resultado -> fetch_assoc()){
    if ($row['estado']=='inactivo') {
  $pdf->SetX(20);
$pdf->SetFillColor(255,255,255);
$pdf->SetDrawColor(65, 61, 61);
$pdf->Cell(10, 8, utf8_decode($i+1),'B',0,'C',1);

$emp=$row['id_empleado'];
$consulta_e ="SELECT concat(nombres,' ',paterno,' ',materno) as completo FROM empleado WHERE id_empleado=$emp";
$resultado_e=mysqli_query($con,$consulta_e);
$row_e = $resultado_e -> fetch_assoc();


$pdf->Cell(70, 8, utf8_decode($row_e['completo']),'B',0,'L',1);
$pdf->Cell(30, 8, utf8_decode($row['usuario']),'B',0,'C',1);
$pdf->Cell(10, 8, utf8_decode('****'),'B',0,'C',1);
$pdf->Cell(25, 8, utf8_decode($row['nivel']),'B',0,'C',1);
$pdf->Cell(15, 8, utf8_decode($row['estado']),'B',1,'C',1);
$pdf->Ln(0.5);
$i=$i+1;
}
}

$pdf->Output();
?>