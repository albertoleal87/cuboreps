<?php

date_default_timezone_set("America/Monterrey");
require_once('php/funciones.php');

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style2.css" type="text/css" rel="stylesheet" />
<link href="css/ui-lightness/jquery-ui-1.8.20.custom.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--
<meta http-equiv="refresh" content="5" />
-->
<title>Cubo reps</title>
</head>

<body>


<center>

<div align="right">
<form name="reloj12">
<input id="reloj" align="right" type="text" size="11" name="digitos">
</form>
</div>

<h1>REPORTE CONCENTRADO</h1>
<form action="" method="post">

<input type="button" id="submit" value="Nuevo Ticket" onclick="window.open('tickets.php', '1', 'width=450,height=550,toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=no'); return false;">
<input type="button"  id="submit" value="Nueva Llamada" onclick="window.open('llamadas.php' , '2' , 'width=450,height=550,left=450,toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=no'); return false;">
<input type="button"  id="submit" value="Nuevo Chat" onclick="window.open('chats.php', '', 'width=450,height=550,left=900,toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=no'); return false;">
<input type="submit" value="Exportar a excel" id="submit" onclick="exportar();">
<input id="date1" type="text"  name="date1" value="
<?php
conservarvalor ('date1','fecha inicial');
?>
" title="fecha inicial">
<input id="date2" type="text"  name="date2" value="
<?php
conservarvalor ('date2','fecha final');
?>
" title="fecha final"> 
<input type="submit" id="submit" value="Buscar">
</form>

<form action="php/ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />

<?php



// $selectreporteglobal = "SELECT id , fecha , hora , ticket , evento , rfc , razon_social , usuario , producto , plan , asunto , nivel_atencion , duracion , transferida , status_ticket , comentarios , reporteglobal.ip , ip_asesores.nombre FROM reporteglobal LEFT JOIN ip_asesores ON reporteglobal.ip = ip_asesores.ip WHERE fecha >= SUBDATE(CURDATE(), INTERVAL 2 DAY) ORDER BY id ASC LIMIT 10  ";

@$date1 = $_POST['date1'];
@$date2 = $_POST['date2'];

if(isset($date1) && isset($date2) && !empty($date1) && !empty($date2) && $date1 != 'fecha inicial' && $date2 != 'fecha final' )
{
include('php/querys.php');	
reportedinamico($selectreporteglobal);	
}
else{
@$date1 = date("d/m/Y");
@$date2 = date("d/m/Y");
include('php/querys.php');
reportedinamico($selectreporteglobal);
} 


?>

</form>
</body>
</html>

