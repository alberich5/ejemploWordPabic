<?php 

//agregamos la ruta de phpword
require_once dirname(__FILE__).'/PHPWord-master/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

//le decimos a phpword que vamos a usar el procesador de plantillas
use PhpOffice\PhpWord\TemplateProcessor;






 ?>