<?php

include 'fpdf/fpdf.php';
include 'conexao/conexaolimpeza.php';

$pessoas = selectAllPessoa();


$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('icon.jpg', 10,10,20,20);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,utf8_decode('E.E.E.P JOSÉ MARIA FALCÃO'),0,0,"C");
$pdf->Ln(15);
$pdf->SetFont('Times','',14);
$pdf->Cell(190,5,utf8_decode('Relatório de saída de produtos'),0,0,"C");
$pdf->Ln(15);

$pdf->SetFont("Arial","I",10);
$pdf->Cell(70,7,"Nome",1,0,"C");
$pdf->Cell(60,7,"Data de Nasc.",1,0,"C");
$pdf->Cell(60,7,"qtdProduto",1,0,"C");
$pdf->Ln();


foreach ($pessoas as $pessoa){
    $pdf->Cell(70,7,utf8_decode($pessoa["nome"]),1,0,"C");
    $pdf->Cell(60,7,$pessoa["qtdProduto"],1,0,"C");
    $pdf->Cell(60,7,  formatoData($pessoa["data"]),1,0,"C");
   
    $pdf->Ln();
}



$pdf->Output();
