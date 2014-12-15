<?php
$fecha = date("d/m/Y");
header("Content-type: application/vnd.ms-excel; name='excel' ");
header("Content-Disposition: filename=reporte_$fecha.xls");
header("Pragma: no-cache");
header("Expires: 0");
$datos = $_POST['datos_a_enviar'];


//$datos = str_replace('\"', '', $datos) ;
$datos = str_replace('\\', '', $datos) ;



echo "$datos ";
?>


