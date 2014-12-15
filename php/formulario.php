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

<form action="" name="crono" method="post" id="formregistro">
<input id="reloj" type="text" size="8" name="display" value="00:00:0"> 


<Table align="center">

<tr>
<td> Evento: </td><td><input type="text" name="evento" value="<?php echo $title ?>" readonly="readonly"></td>
</tr>

<tr <?php echo $displayticket ?>>
<td> ID Ticket: </td><td><input onblur="ajax1();" type="text" name="ticket" value="
<?php
conservarvalor ('ticket','');
?>
"></td>
</tr>



<tr>
<td> RFC: </td><td><input onblur="ajax2();" type="text" id="rfc" name="rfc" value="
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

<tr <?php echo $displayllamada ?>>
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

<tr>
<td> Nivel soporte : </td><td><select name="nivel_atencion" >
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

<tr <?php echo $displayticket ?>>
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

<tr <?php echo $displayllamada ?>>
<td> Transferida : </td><td><select name="transferida" >
<option><?php
conservarvalor ('transferida','');
?></option>
<option>NO</option>
<option>SI</option>
</select>
</td>
</tr>

<tr>
<td id="textarea"> Comentarios:</td><td><textarea name="comentarios"><?php
conservarvalor ('comentarios','');
?></textarea></td>
</tr>	

</table><input id="submit" value="Enviar" type="submit"><br>
</form>