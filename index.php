<?php
date_default_timezone_set("America/Monterrey");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--
<meta http-equiv="refresh" content="5" />
-->
<title>Cubo reps</title>
</head>
<body>

<center>

<form name="reloj12">
<div align="right">
<input id="reloj" align="right" type="text" size="11" name="digitos"><br>
</div>
</form>

<TABLE>
<TR>
<TD>
<h1>
REPORTE POR ASESOR
</h1>
</TD>
</TR>
</TABLE>




<input type="button" id="submit" value="Nuevo Ticket" onclick="window.open('tickets.php', '1', 'width=450,height=600,toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=no'); return false;">
<input type="button"  id="submit" value="Nueva Llamada" onclick="window.open('llamadas.php' , '2' , 'width=450,height=600,left=450,toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=no'); return false;">
<input type="button"  id="submit" value="Nuevo Chat" onclick="window.open('chats.php', '', 'width=450,height=600,left=900,toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=no'); return false;">
<input type="button"  id="submit" value="Gratuitos" onclick="window.open('gratuitos.php', 'gratuitos', ''); return false;">
<input type="submit" value="Exportar a excel" id="submit" onclick="exportar();">







<form action="php/ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />

<?php




require_once('php/conectcuboreps.php');	

@$ipuser = $_SERVER['REMOTE_ADDR'];

$select = "SELECT * FROM reporteglobal where ip='$ipuser' ORDER BY id DESC LIMIT 500  ";
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
echo "<td style='width:auto'>$value</td>";} 
echo "</tr>"; // Cerrar fila
}

mysql_close($server);



?>
</table>
</form>




</body>
</html>

