<?php 

//agregamos la ruta de phpword
require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

//le decimos a phpword que vamos a usar el procesador de plantillas
use PhpOffice\PhpWord\TemplateProcessor;
//guardamos un objecto de templateprocessor y asinamos ubicacion de la plantilla

$templateWord = new TemplateProcessor('ofi2.docx');
//variables de prueba que rellenan la plantilla
$nombre = "SANDRA SIERRA LOPEZ";
$oficio = "35";
$fecha = "1 de enero del 2017";



// --- Asignamos valores a la plantilla
$templateWord->setValue('nombre',$nombre);
$templateWord->setValue('oficio',$oficio);
$templateWord->setValue('fecha',$fecha);

//variables


// --- Guardamos el documento
$templateWord->saveAs('ContratoAlta.docx');
//agregamos la cabecera para descargar el documentos desde php
header("Content-Disposition: attachment; filename=ContratoAlta.docx; charset=iso-8859-1");
echo file_get_contents('ContratoAlta.docx');


?>