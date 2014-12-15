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



<!--
<fieldset id="fiel">
<input type="button" id="submit" value="Nuevo Chat" value="Crear" onclick="crear(this) ;" />
<input type="button"  id="submit" value="Nueva Llamada" onClick="window.open('php/formulario2.php', this.target, 'width=450,height=550'); return false;">
<input type="button"  id="submit" value="Nuevo Ticket" onClick="$('#divticket').toggle(); IniciarCrono()">
<input type="submit" value="Exportar a excel" id="submit" onclick="exportar();">
</fieldset>
-->
<h1>REPORTE CONCENTRADO</h1>
<form name="reloj12">
<input type="button" id="submit" value="Nuevo Ticket" onclick="window.open('tickets.php', '1', 'width=450,height=550,toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=no'); return false;">
<input type="button"  id="submit" value="Nueva Llamada" onclick="window.open('llamadas.php' , '2' , 'width=450,height=550,left=450,toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=no'); return false;">
<input type="button"  id="submit" value="Nuevo Chat" onclick="window.open('chats.php', '', 'width=450,height=550,left=900,toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=no'); return false;">
<input type="submit" value="Exportar a excel" id="submit" onclick="exportar();">
<input id="reloj" align="right" type="text" size="11" name="digitos">
</form>




<!--
toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=no

toolbar=[yes|no] – Muestra u oculta la barra de herramientas del navegador
location=[yes|no] – Muestra u oculta la barra de direcciones del navegador
directories=[yes|no] – Muestra u oculta una barra de favoritos
status=[yes|no] – Muestra u oculta la barra de estado del navegador
menubar=[yes|no] – Muestra u oculta la barra de menús (arhivo – editar, etc…)
scrollbars=[yes|no] – Muestra u oculta las barras de desplazamiento
resizable=[yes|no] – Define si la ventana podrá ser redimensionada una vez creada
width=XXX – Define el ancho de la ventana en pixeles, ejemplo: width=600
height=XXX – Define el alto de la ventana en pixeles, ejemplo: height=400
left=XX – Define a cuantos pixeles del lado izquierdo de la pantalla se generará la ventana
top=XX – Define a cuantos pixeles desde la parte de arriba de la pantalla se generará la ventana
-->


<div id="divticket" style="display:none">
<form name="crono">
<input type="text" size="8" name="display" value="00:00:0"> 
</form>

<?php
include('php/formulario.php');
	?>

</div>

<form action="php/ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />

<?php




require_once('php/conectcuboreps.php');	



$select = "SELECT id , fecha , hora , ticket , evento , rfc , razon_social , usuario , producto , plan , asunto , nivel_atencion , duracion , transferida , status_ticket , comentarios , reporteglobal.ip , ip_asesores.nombre FROM reporteglobal LEFT JOIN ip_asesores ON reporteglobal.ip = ip_asesores.ip ORDER BY id ASC ";
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

