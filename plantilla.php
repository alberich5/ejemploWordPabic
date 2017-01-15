<?php 

//agregamos la ruta de phpword
require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

//le decimos a phpword que vamos a usar el procesador de plantillas
use PhpOffice\PhpWord\TemplateProcessor;
//guardamos un objecto de templateprocessor y asinamos ubicacion de la plantilla
$templateWord = new TemplateProcessor('ofi3.docx');
//variables de prueba que rellenan la plantilla
$nombre = "SANDRA SIERRA LOPEZ";
$edad = "35";
$direccion = "LOS MOCHIS SINALOA";
$estado_civil="soltero"


// --- Asignamos valores a la plantilla
$templateWord->setValue('nombre',$nombre);
$templateWord->setValue('edad',$edad);
$templateWord->setValue('direccion',$direccion);
$templateWord->setValue('estado',$estado_civil);


// --- Guardamos el documento
$templateWord->saveAs('Contrato.docx');
//agregamos la cabecera para descargar el documentos desde php
header("Content-Disposition: attachment; filename=Contrato.docx; charset=iso-8859-1");
echo file_get_contents('Contrato.docx');


?>