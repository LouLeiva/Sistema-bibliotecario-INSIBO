<?php
include_once "conexion.php";

$nombrePDF = "../documentos/".$_GET['nombre'];

$nuevoNombrePDF = filesize($nombrePDF).".pdf";

header("Content-Description: File Transfer");

header("Content-Transfer-Encoding: binary");

header("Content-Type: application/force-download");

header("Content-Disposition: attachment; filename=$nuevoNombrePDF");
  
readfile($nombrePDF);

?>