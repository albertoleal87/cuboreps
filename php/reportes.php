<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script language="javascript">
function exportar() 
	{
		$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
		$("#FormularioExportacion").submit();
}

</script>

<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Cobranza 2013</title>
	</head>
<body>
<center>




<input type="submit" value="Exportar a excel" id="submit" onclick="exportar();">

<form action="ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />




<?php

require_once('conexion.php');	

$select = "SELECT * FROM cobranza ORDER BY fecha ";
$resultado = mysql_query($select);
$campos = mysql_num_fields($resultado);
$filas = mysql_num_rows($resultado);

echo<<<formulario
<div id="Reporte">
<table id="Exportar_a_Excel">
<tr>

formulario;

for ($i = 0;$i < $campos;$i++) 
{$nombrecampo = mysql_field_name($resultado, $i);
echo "<th>$nombrecampo</th>";}

echo "</tr>"; // Cerrar fila

while ($row = mysql_fetch_assoc($resultado)) 
{echo "<tr>"; // Crear fila

foreach ($row as $key => $value) {
echo "<td>$value&nbsp;</td>";} 
echo "</tr>"; // Cerrar fila
}







mysql_close($server);

?>

</table>


</form>

</body>
</html>

