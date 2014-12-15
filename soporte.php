<?php
date_default_timezone_set("America/Monterrey");
require_once('php/funciones.php');
require_once('php/querys.php');
?>
<!DOCTYPE html>
<html on xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SOPORTE</title>
</head>
<body style="overflow:auto" onload="IniciarCrono(); displayevento();">
<center>

<form action="" name="crono" method="post" id="formregistro">
<input class="span2 text-center" id="reloj" type="text" size="8" name="display" value="00:00:0"> 


<Table align="center">

<tr>
<td> Evento: </td><td><select id="evento" onchange="displayevento();" name="evento">
<option><?php
conservarvalor ('evento','');
?></option>
<option>TICKET</option>
<option>LLAMADA</option>
<option>CHAT</option>
</select></td>
</tr>

<tr id="rowticket" style="display:none">
<td> ID Ticket: </td><td><input onchange="ajax1();" type="text" name="ticket" value="
<?php
conservarvalor ('ticket','');
?>
"></td>
</tr>



<tr>
<td> RFC: </td><td><input onchange="ajax2();" type="text" id="rfc" name="rfc" value="
<?php
conservarvalor ('rfc','');
?>
" ></td>
</tr>



<tr>
<td> Razón Social: </td><td><input type="text" name="razon_social" id="razon_social" value="
<?php
conservarvalor ('razon_social','');
?>
"></td>
</tr>

<tr>
<td> Usuario: </td><td><input type="text" name="usuario" id="usuario" value="
<?php
conservarvalor ('usuario','');
?>
"></td>
</tr>

<tr id="rowtelefono" style="display:none">
<td> Telefono: </td><td><input type="text" name="telefono" id="telefono" value="
<?php
conservarvalor ('telefono','');
?>
"></td>
</tr>


<tr>
<td> Correo: </td><td><input type="text" name="correo" id="correo" value="
<?php
conservarvalor ('correo','');
?>
"></td>
</tr>

<tr>
<td> Producto:</td><td><select onchange="displaysoftware()" name="producto" id="producto">
<option><?php
conservarvalor ('producto','');
?></option>
<?php
selectDinamico($selectProducto,'producto');
?>
</select>
</td>
</tr>

<tr>
<td> Plan:</td><td> <select name="plan" id="plan">
<option><?php
conservarvalor ('plan','');
?></option>
<?php
selectDinamico($selectPlan,'plan');
?>
</select>
</td>
</tr>

<tr id="rowsoftware" style="display:none">
<td> Software </td><td><input type="text" name="software" id="software" value="
<?php
conservarvalor ('software','');
?>
"></td>
</tr>

<tr>
<td> Asunto: </td><td><select id='asunto' name="asunto" >
<option><?php
conservarvalor ('asunto','');
?></option>
<?php
selectdinamico($selectAsunto,'asunto');
?>

</select>
</td>
</tr>



<tr id="row_status_ticket" style="display:none">
<td> Status ticket : </td><td><select name="status_ticket" >
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
<td> Nivel soporte : </td><td><select onchange="displaytransferida();" name="nivel_atencion" id="nivel_atencion" >
<option><?php
conservarvalor ('nivel_atencion','');
?></option>
<option>SOPORTE PRIMER NIVEL</option>
<option>ESCALADO A TECNOLOGIA</option>
<option>ESCALADO A VENTAS</option>
<option>ESCALADO A DISEÑO</option>
<option>ESCALADO A PROYECTOS</option>
<option>ESCALADO A ADMINISTRACIÓN</option>
</select>
</td>
</tr>

<tr id="rowtransferida" style="display:none">
<td> Escalado con: </td><td><input type="text" name="transferida" value="
<?php
conservarvalor ('software','');
?>
">
</td>
</tr>

<tr id="row_adicional">
<td>Adicional: </td><td><input type="text" name="adicional" value="
<?php
conservarvalor ('adicional','');
?>
">
</td>
</tr>

<tr>
<td id="textarea"> Comentarios:</td><td><textarea name="comentarios"><?php
conservarvalor ('comentarios','');
?></textarea></td>
</tr>	

</table><input id="submit" class="btn btn-primary" value="Enviar" type="submit"><br>
</form>

<?php

@$fecha = date("Y-m-d");
@$hora = date("h:ia");
@$ticket = $_POST['ticket'];
@$evento = $_POST['evento'];
@$rfc = $_POST['rfc'];
@$rfc = str_replace('-', '', $rfc);
@$rfc = str_replace(' ', '', $rfc);
@$razon_social = $_POST['razon_social'];
@$usuario = $_POST['usuario'];
@$telefono = $_POST['telefono'];
@$correo = $_POST['correo'];
@$software = $_POST['software'];
@$producto = $_POST['producto'];
@$plan = $_POST['plan'];
@$asunto = $_POST['asunto'];
@$nivel_atencion = $_POST['nivel_atencion'];
@$duracion = $_POST['display'];
@$transferida = $_POST['transferida'];
@$comentarios = $_POST['comentarios'];
@$comentarios = str_replace("\n", " ", $comentarios);
@$comentarios = str_replace("\r", " ", $comentarios);
@$comentarios = str_replace("\r\n", " ", $comentarios);
@$status_ticket = $_POST['status_ticket'];
@$ip = $_SERVER['REMOTE_ADDR'];
@$adicional = $_POST['adicional'];

if (
isset($fecha) && !empty($fecha)
&& isset($hora) && !empty($hora)
&& isset($evento) && !empty($evento)
&& isset($rfc) && !empty($rfc)
&& isset($razon_social) && !empty($razon_social)
&& isset($usuario) && !empty($usuario)
&& isset($producto) && !empty($producto)
&& isset($plan) && !empty($plan)
&& isset($asunto) && !empty($asunto)
&& isset($nivel_atencion) && !empty($nivel_atencion)
&& isset($duracion) && !empty($duracion)
&& isset($ip) && !empty($ip)
)

{
include('php/querys.php');	

if (simpleQuery($insertReporteGlobal))

{
simpleQuery($insertEmpresa);
simpleQuery($updateEmpresa);

echo "<script type='text/javascript'>alert('Datos ingresados con exito!!!'); window.opener.document.location='index.php'; close();</script>";}

else {echo "<script type='text/javascript'>alert(' Error al insertar.'); </script>";}

}

elseif (isset($duracion))
{echo "<script type='text/javascript'>alert('Hay uno o mas campos vacios');</script>";}
?>


</body>
</html>