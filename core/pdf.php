<?php
ini_set("display_errors", 1);
   include("config.php");
require 'fpdf181/fpdf.php';

$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> SetFond('Arial', 'B', 18)
$pdf -> Cell(40,10, 'This is demo')
$pdf -> output();
 ?>
