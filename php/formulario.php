<?php

$selectproducto = "SELECT producto FROM productos ORDER BY producto ASC ";
$selectplan = "SELECT plan FROM planes ORDER BY plan ASC ";

function selectdinamico ($query,$key)
{
require_once("conectcuboreps.php"); 
$mysql_query = mysql_query($query);
while ($array = mysql_fetch_assoc($mysql_query)) 
{echo "<option>$array[$key]</option>";}
}

@$id = $_POST['id'];
@$fecha = date("d/m/Y");
@$hora = date("h:ia");

@$ticket = $_POST['ticket'];
@$evento = $_POST['evento'];
@$rfc = $_POST['rfc'];
@$razon_social = $_POST['razon_social'];
@$usuario = $_POST['usuario'];
@$producto = $_POST['producto'];
@$plan = $_POST['plan'];
@$asunto = $_POST['asunto'];
@$nivel_atencion = $_POST['nivel_atencion'];
@$duracion = $_POST['duracion'];
@$transferida = $_POST['transferida'];
@$comentarios = $_POST['comentarios'];
@$status_ticket = $_POST['status_ticket'];
@$ip = $_SERVER['REMOTE_ADDR'];


if (isset($rfc) && !empty($rfc))

{	
require_once('conectcuboreps.php');	


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
mysql_close($server);

}

else {echo "<script type='text/javascript'>alert(' Error al insertar, posiblemente ya existe el registro.');</script>";}

}

elseif(isset($rfc) && empty($rfc)){echo "<script type='text/javascript'>alert('Debes ingresar al menos un valor para RFC.');</script>";}

?>