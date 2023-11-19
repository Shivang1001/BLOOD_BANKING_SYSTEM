<?php

require_once 'vendor/autoload.php';


//Import PHPMailer classes into the global namespace
require "fpdf186/fpdf.php";

$pdf = new FPDF();
$pdf->addPage('P', 'A4', 0);
$pdf->SetTextColor(255 ,0, 0);

$pdf->SetFont('Arial','B',40);


$pdf->text(10, 30, "Arogini Blood");

$pdf->line(10, 35, 400, 35);

$pdf->SetTextColor(0 ,0, 0);
$pdf->SetFont('Arial','',20);
$pdf->text(10, 50, "Blood Requestor Details");


$pdf->SetFont('Arial','',10);

$pdf->text(10, 60, "Patient Name : Blood Requestor Details");
$pdf->text(10, 68, "Contact Name :Blood Requestor Details");
$pdf->text(10, 76, "Phone Number : Blood Requestor Details");
$pdf->text(10, 84, "Email-ID : Blood Requestor Details");
$pdf->text(10, 92, "Blood Group : Required Date : Blood Group : Blood Requestor Details");
$pdf->text(10, 100, "City : Required Date : Blood Group : Blood Requestor Details");
$pdf->text(10, 108, "Doctor Name : Required Date : Blood Group : Blood Requestor Details");
$pdf->text(10, 116, "Gender : Required Date : Blood Group : Blood Requestor Details");
$pdf->text(10, 124, "Hospital Details : Required Date : Blood Group : Blood Requestor Details");


$pdf->SetTextColor(0 ,0, 0);
$pdf->SetFont('Arial','',20);
$pdf->text(10, 150, "Donor Details");


$pdf->SetFont('Arial','',10);

$pdf->text(10, 160, "Patient Name : Blood Requestor Details");
$pdf->text(10, 168, "Contact Name :Blood Requestor Details");
$pdf->text(10, 176, "Phone Number : Blood Requestor Details");
$pdf->text(10, 184, "Email-ID : Blood Requestor Details");
$pdf->text(10, 192, "Blood Group : Required Date : Blood Group : Blood Requestor Details");
$pdf->text(10, 200, "City : Required Date : Blood Group : Blood Requestor Details");
$pdf->text(10, 208, "Doctor Name : Required Date : Blood Group : Blood Requestor Details");
$pdf->text(10, 216, "Gender : Required Date : Blood Group : Blood Requestor Details");
$pdf->text(10, 224, "Hospital Details : Required Date : Blood Group : Blood Requestor Details");


$pdf->output('F', 'q.pdf');