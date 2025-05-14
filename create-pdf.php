<?php

use Dompdf\Dompdf;

require __DIR__ . '/vendor/autoload.php';

$domPdf = new Dompdf();

$domPdf->loadHtml(file_get_contents(__DIR__ . '/input.html'));

// Setup the paper size and orientation
$domPdf->setPaper('A4', 'Portrait');

// Render the HTML as PDF
$domPdf->render();

file_put_contents(__DIR__ . '/output.pdf', $domPdf->output());
