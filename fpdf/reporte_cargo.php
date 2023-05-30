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
$this->Image('img/waves.png',-10,-1,110);
$this->Image('img/cargo.jpg',97,10,40);

$this->SetY(55);
$this->SetX(80);

$this->SetFont('Arial','B',18);
$this->Cell(89, 8, 'REPORTE DE CARGOS',0,1);
$this->SetY(60);
$this->SetX(80);
$this->SetFont('Arial','',10);
$this->Cell(40, 8, utf8_decode('NOGALES TICONA RIVAS'));

$this->Ln(15);

}

function Footer()
{
     $this->SetFont('helvetica', 'B', 8);
        $this->SetY(-15);
        $this->Cell(95,5,utf8_decode('Página ').$this->PageNo().' / {nb}',0,0,'L');
        $this->Cell(95,5,date('d/m/Y | g:i:a') ,00,1,'R');
        $this->Line(10,287,200,287);
        $this->Cell(0,5,utf8_decode("Grupo3."),0,0,"C");
        
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
$consulta ="SELECT id_cargo,cargo  FROM cargo";
$con= new Conexion();
$resultado=mysqli_query($con,$consulta);

$pdf->SetX(45);
$pdf->SetFillColor(74,85,255);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20, 12, utf8_decode('N°'),0,0,'C',1);
//$pdf->Cell(20, 12, utf8_decode(''),0,0,'C',1);
$pdf->Cell(80, 12, utf8_decode('cargo'),0,1,'C',1);



$pdf->SetFont('Arial','',11);
$i=0;
foreach ($resultado as $key => $value) {
  $pdf->SetX(45);
$i=$i+1;
  $pdf->SetFillColor(255,255,255);
  $pdf->SetDrawColor(65, 61, 61);
$pdf->Cell(20, 8, utf8_decode($i),'B',0,'C',1);
//$pdf->Cell(20, 8, utf8_decode($value['id_cargo']),'B',0,'L',1);
$pdf->Cell(80, 8, utf8_decode($value['cargo']),'B',1,'C',1);

$pdf->Ln(0.15);
    
       
    }

$pdf->Output();
?>