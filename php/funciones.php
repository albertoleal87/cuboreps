<?php

/*
@$ip = $_SERVER['REMOTE_ADDR'];

if (
$ip == '172.17.1.105' or  // Nallely Leal
$ip == '172.17.1.109' or  // Anel Plascencia
$ip == '172.17.3.154' or  // Luis Palacios
$ip == '172.17.1.140' or  // Miguel Platas

$ip == '172.17.1.145' or  // Eduardo Gonzalez
$ip == '172.17.1.182' or  // Jesús de la Rosa
$ip == '172.17.1.123' or  // Jesús de la Rosa

$ip == '172.17.1.110' or  // Oscar Hernandez
$ip == '172.17.1.196' or  // Joel Jasso

$ip == '172.17.1.121' or  // Citlali Garcia
$ip == '172.17.1.129' or  // Ivonne Macias

$ip == '172.17.1.147' or  // Alberto Leal
$ip == '172.17.1.17'  or  // Alma del Angel
$ip == '172.17.1.18'  or  // Edgar Garcia
$ip == '172.17.3.167' or  // Alberto Rdz.

$ip == '172.17.3.71'  or  // Migdalia Sandoval
$ip == '172.17.1.164'  or  // Migdalia Sandoval

$ip == '172.17.3.47'  or  // Joel Torres wifi
$ip == '172.17.1.187' or  // Joel Torres cable

$ip == '127.0.0.1'        // localhost
)	
{echo "";}
else {header("Location: http://www.google.com");}

*/

//GENRA UNA TABLA CON EL RESULTADO DEL $QUERY

function reporteDinamico ($query)
{
$mysql_connect = mysql_connect("localhost", "usercubo", "12345") or die (mysql_error());
mysql_select_db("cuboreps", $mysql_connect) or die (mysql_error());
mysql_query("SET NAMES 'utf8'");
$mysql_query = mysql_query($query) or die (mysql_error());
$mysql_num_fields = mysql_num_fields($mysql_query);
$mysql_num_rows = mysql_num_rows($mysql_query);
echo<<<formulario
<table id='Exportar_a_Excel'>
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
echo "<td>$value</td>";} 
echo "</tr>"; // Cerrar fila
$c++;
}
echo "</table>"; // Cerrar tabla
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
$mysql_connect = mysql_connect("localhost", "usercubo", "12345") or die (mysql_error());
mysql_select_db("cuboreps", $mysql_connect) or die (mysql_error());
mysql_query("SET NAMES 'utf8'");
$mysql_query = mysql_query($query) or die (mysql_error());
while ($array = mysql_fetch_assoc($mysql_query)) 
{echo "<option>$array[$key]</option>";}
mysql_close($mysql_connect);
}


// FUNCION PARA EJECUTAR QUERYS SIMPLES (INSERT, UPDATE, DELETE)

function simpleQuery($query)
{
$mysql_connect = mysql_connect("localhost", "usercubo", "12345") or die (mysql_error());
mysql_select_db("cuboreps", $mysql_connect) or die (mysql_error());
mysql_query("SET NAMES 'utf8'");
if (mysql_query($query))
{return 'true';}
else {return 'false';}
mysql_close($mysql_connect);
}

?>