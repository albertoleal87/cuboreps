<?php
date_default_timezone_set("America/Monterrey");

$selectproducto = "SELECT producto FROM productos ORDER BY producto ASC ";
$selectplan = "SELECT plan FROM planes ORDER BY plan ASC ";
$selectasunto = "SELECT asunto FROM asuntos ORDER BY asunto ASC ";

function selectdinamico ($query,$key)
{
require_once("php/conectcuboreps.php"); 
$mysql_query = mysql_query($query);
while ($array = mysql_fetch_assoc($mysql_query)) 
{echo "<option>$array[$key]</option>";}
}


?>
<html on xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chats</title>
</head>
<body onload="IniciarCrono()">
<center>

<form name="crono" method="post">
<input id="reloj" type="text" size="8" name="display" value="00:00:0"> 

<Table align="center">

<tr>
<td>Evento: </td><td><input type="text" name="evento" value="CHAT" readonly="readonly"></td>
</tr>

<tr>
<td> RFC: </td><td><input type="text" name="rfc" ></td>
</tr>
<tr>
<td> Razón Social: </td><td><input type="text" name="razon_social"></td>
</tr>

<tr>
<td> Telefono/correo: </td><td><input type="text" name="usuario"></td>
</tr>

<tr>
<td> Producto:</td><td> <select name="plan">
<option></option>
<?php
selectdinamico($selectplan,'plan');
?>

</select>
</td>
</tr>

<tr>
<td> Plan:</td><td><select name="producto">
<option></option>
<?php
selectdinamico($selectproducto,'producto');
?>

</select>
</td>
</tr>



<tr>
<td> Asunto: </td><td><select name="asunto" >

<option></option>
<?php
selectdinamico($selectasunto,'asunto');
?>

</select>
</td>
</tr>

<tr>
<td> Nivel soporte : </td><td><select name="nivel_atencion" >
<option></option>
<option>SOPORTE PRIMER NIVEL</option>
<option>ESCALADO A TECNOLOGIA</option>
<option>ESCALADO A VENTAS</option>
<option>ESCALADO A DISEÑO</option>
<option>ESCALADO A PROYECTOS</option>


</select>
</td>
</tr>

<tr>
<td id="textarea"> Comentarios:</td><td><textarea name="comentarios"></textarea></td>
</tr>	

</table>
<input id="submit" value="Enviar" type="submit"><br>
</form>

<?php

@$id = $_POST['id'];
@$fecha = date("d/m/Y");
@$hora = date("h:ia");
@$ticket = "N/A";
@$evento = $_POST['evento'];
@$rfc = $_POST['rfc'];
@$razon_social = $_POST['razon_social'];
@$usuario = $_POST['usuario'];
@$producto = $_POST['producto'];
@$plan = $_POST['plan'];
@$asunto = $_POST['asunto'];
@$nivel_atencion = $_POST['nivel_atencion'];
@$duracion = $_POST['display'];
@$transferida = "N/A";
@$comentarios = $_POST['comentarios'];
@$status_ticket = "N/A";
@$ip = $_SERVER['REMOTE_ADDR'];


if (isset($rfc) && !empty($rfc))

{	
require_once('php/conectcuboreps.php');	


$insert = "INSERT INTO cuboreps . reporteglobal (
`id` ,
`fecha` ,
`hora` ,
`ticket` ,
`evento` ,
`rfc` ,
`razon_social` ,
`usuario` ,
`producto` ,
`plan` ,
`asunto` ,
`nivel_atencion` ,
`duracion` ,
`transferida` ,
`comentarios` ,
`status_ticket` ,
`ip`
)	
VALUES (
'$id',
'$fecha',
'$hora',
'$ticket',
'$evento',
'$rfc',
'$razon_social',
'$usuario',
'$producto',
'$plan',
'$asunto',
'$nivel_atencion',
'$duracion',
'$transferida',
'$comentarios',
'$status_ticket',
'$ip'

) " ;

if (mysql_query($insert))

{echo "<script type='text/javascript'>alert('Datos ingresados con exito!!!');</script>";

}

else {echo "<script type='text/javascript'>alert(' Error al insertar, posiblemente ya existe el registro.');</script>";}
}
elseif(isset($rfc) && empty($rfc)){echo "<script type='text/javascript'>alert('Debes ingresar al menos un valor para RFC.');</script>";}
?>



</body>
</html>