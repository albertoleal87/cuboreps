<?php
date_default_timezone_set("America/Monterrey");
require_once('php/funciones.php');
require_once('php/querys.php');
$title = "Of comeriales";

?>

<html on xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
</head>
<body onload="IniciarCrono()">
<center>

<form name="crono" method="post">
<input id="reloj" type="text" size="8" name="display" value="00:00:0"> 

<Table align="center">

<tr>
<td> MEDIO DE CONTACTO: </td><td><select name="medio" >
<option><?php
conservarvalor ('medio','');
?></option>
<option>TELEFONO INT</option>
<option>TELEFONO EXT</option>
<option>CORREO</option>
<option>TICKET INT</option>
<option>TICKET EXT</option>
</select>
</td>
</tr>

<tr>
<td> ID TICKET: </td><td><input type="text" name="ticket" value="<?php
conservarvalor ('ticket','');
?>">
</td>
</tr>

<tr>
<td> STATUS TICKET: </td><td><select name="status_ticket" >
<option><?php
conservarvalor ('status_ticket','');
?></option>
<option>RESUELTO</option>
<option>PENDIENTE</option>
<option>CERRADO</option>
<option>ABIERTO</option>
</select></td>
</tr>

<tr>
<td> CLAVE: </td><td><select name="clave" >
<option><?php
conservarvalor ('clave','');
?></option>
<?php
selectdinamico($OfComerciales,'clave');
?>

</select>
</td>
</tr>

<tr>
<td> OFICINA: </td><td><select name="oficina" >
<option><?php
conservarvalor ('oficina','');
?></option>
<?php
selectdinamico($OfComerciales,'oficina');
?>
</select>
</td>
</tr>

<tr>
<td> CONTACTO: </td><td><select name="contacto" >
<option><?php
conservarvalor ('contacto','');
?></option>
<?php
selectdinamico($selectContacto,'contacto');
?>
</select>
</td>
</tr>

<tr>
<td> ASUNTO: </td><td><select name="asunto" >
<option><?php
conservarvalor ('asunto','');
?></option>
<?php
selectdinamico($selectAsuntoOfComercial,'asunto');
?>

</select>
</td>
</tr>

<tr>
<td> ESCALACION A:</td><td><select name="escalacion" >
<option><?php
conservarvalor ('escalacion','');
?></option>
<?php
selectdinamico($selectEscalacion,'escalacion');
?>
</select>
</td>
</tr>


<tr>
<td id="textarea"> COMENTARIOS:</td><td><textarea name="comentarios">
<?php
conservarvalor ('comentarios','');
?>
</textarea></td>
</tr>	

</table><input id="submit" value="Enviar" type="submit"><br>

</form>


<?php

@$fecha = date("Y-m-d");
@$hora = date("h:ia");
@$medio = $_POST['medio'];
@$ticket = $_POST['ticket'];
@$status_ticket = $_POST['status_ticket'];
@$clave = $_POST['clave'];
@$oficina = $_POST['oficina'];
@$contacto = $_POST['contacto'];
@$escalacion = $_POST['escalacion'];
@$asunto = $_POST['asunto'];
@$duracion = $_POST['display'];
@$comentarios = $_POST['comentarios'];
@$ip = $_SERVER['REMOTE_ADDR'];

if (
isset($fecha) && !empty($fecha) &&
isset($hora) && !empty($hora) &&
isset($medio) && !empty($medio) &&
isset($clave) && !empty($clave) &&
isset($oficina) && !empty($oficina) &&
isset($contacto) && !empty($contacto) &&
isset($escalacion) && !empty($escalacion) &&
isset($asunto) && !empty($asunto) &&
isset($duracion) && !empty($duracion) &&
isset($comentarios) && !empty($comentarios) &&
isset($ip) && !empty($ip)
)

{
include('php/querys.php');	

if (simpleQuery($insertOfcomerciales))

{echo "<script type='text/javascript'>alert('Datos ingresados con exito!!!'); close()</script>";}

else {echo "<script type='text/javascript'>alert(' Error al insertar.'); </script>";}

}

elseif (isset($duracion))
{echo "<script type='text/javascript'>alert('Hay uno o mas campos vacios');</script>";}
?>


</body>
</html>