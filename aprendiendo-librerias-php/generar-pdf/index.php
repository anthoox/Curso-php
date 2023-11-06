<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
// $html = "<h1>Hola mundo desde una librería de PHP para hacer PDFs</h1>";
// $html .= "<p>Master en PHP - Antho</p>";
// $html2pdf->writeHTML($html);


/*
 * Lo que va despues de ob_start(), lo recoge y guarda el contenido hasta que llega a ob_get_clean()
 * Almacena el contenido en la variable $html
 */
// Recoger la vista a imprimir:
ob_start();
require_once 'pdf_para_generar.php';
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');