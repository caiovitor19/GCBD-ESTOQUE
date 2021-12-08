<?php

include 'fpdf/fpdf.php';
include 'conexao/conexao.php';

$pessoas = selectAllPessoa();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(200,10,utf8_decode('Relatório de cadastros'),0,0,"C");
$pdf->Ln(15);

$pdf->SetFont("Arial","I",10);
$pdf->Cell(70,7,"Nome",1,0,"C");
$pdf->Cell(60,7,"Quantidade",1,0,"C");
$pdf->Cell(60,7,"Data",1,0,"C");
$pdf->Ln();

foreach ($pessoas as $pessoa){
    $pdf->Cell(70,7,utf8_decode($pessoa["nome"]),1,0,"C");
    $pdf->Cell(60,7,$pessoa["qtdProduto"],1,0,"C");
    $pdf->Cell(60,7,  formatoData($pessoa["data"]),1,0,"C");
   
    $pdf->Ln();
}

$pdf->Output();
