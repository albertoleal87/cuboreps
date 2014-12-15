<?php

//GENRA UNA TABLA CON EL RESULTADO DEL $QUERY

function reporteDinamico ($query)
{
include('mysqlconnect.php');
$mysql_query = mysql_query($query) or die (mysql_error());
$mysql_num_fields = mysql_num_fields($mysql_query);
$mysql_num_rows = mysql_num_rows($mysql_query);
echo<<<formulario
<div style="overflow: auto">
<table class="table-striped table-condensed " id='Exportar_a_Excel' >
<tr>
formulario;
for ($i = 0;$i < $mysql_num_fields;$i++) 
{$mysql_field_name = mysql_field_name($mysql_query, $i);
echo "<th>$mysql_field_name</th>";} // Crear encabezados
echo "</tr>"; // Cerrar fila
$c = 1 ; // esto es un simple contador 
while ($array = mysql_fetch_assoc($mysql_query)) 
{
if($c%2==0) //si el residuo es 0 pintamos filas 
{
$style = "style='background-color:#BBB'"; //pinta filas
}
else
{
$style = ""; //no pinta filas
}
echo "<tr $style>"; // Crear fila pintada
foreach ($array as $key => $value) {
echo "<td class='text-center'>$value</td>";} 
echo "</tr>"; // Cerrar fila
$c++;
}
echo "</table></div>"; // Cerrar tabla
mysql_close($mysql_connect);
}


// FUNCION PARA INPUTS , SI HAY UN POST DEVUELVE EL VALOR DEL POST, SI NO, DEVUELVE EL VALOR FALSO
function conservarValor ($nombreInput,$valorFalso)
{
@$postInput = $_POST[$nombreInput];
if(isset($postInput) && !empty($postInput))
{echo $postInput;}
else {echo $valorFalso;}
}

// FUNCION PARA SELECTS (LISTAS) , DEVUELVE TODOS LOS VALORES DE UN CAMPO Y LOS DEVUELVE EN FORMA DE LISTA DE OPCIONES PARA UN SELECT
function selectDinamico ($query,$key)
{
include('mysqlconnect.php');
$mysql_query = mysql_query($query) or die (mysql_error());
while ($array = mysql_fetch_assoc($mysql_query)) 
{echo "<option>$array[$key]</option>";}
mysql_close($mysql_connect);
}


// FUNCION PARA EJECUTAR QUERYS SIMPLES (INSERT, UPDATE, DELETE)

function simpleQuery($query)
{
include('mysqlconnect.php');
if (mysql_query($query))
{return 'true';}
else {return 'false';}
mysql_close($mysql_connect);
}

?>