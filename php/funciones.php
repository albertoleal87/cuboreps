<?php
//GENRA UNA TABLA CON EL RESULTADO DEL $QUERY
function reporteDinamico ($query)
{
$mysql_connect = mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("cuboreps", $mysql_connect) or die (mysql_error());
mysql_query("SET NAMES 'utf8'");
$mysql_query = mysql_query($query) or die (mysql_error());
$mysql_num_fields = mysql_num_fields($mysql_query);
$mysql_num_rows = mysql_num_rows($mysql_query);
echo<<<formulario
<table id="Exportar_a_Excel">
<tr>
formulario;
for ($i = 0;$i < $mysql_num_fields;$i++) 
{$mysql_field_name = mysql_field_name($mysql_query, $i);
echo "<th>$mysql_field_name</th>";} // Crear encabezados
echo "</tr>"; // Cerrar fila
$c = 2 ; // esto es un simple contador 
while ($array = mysql_fetch_assoc($mysql_query)) 
{
if($c%2==0) //si el residuo es 0 la pintamos de un color 
{
echo "<tr>"; // Crear fila sin pintar
foreach ($array as $key => $value) {
echo "<td style='width:auto'>$value</td>";} 
echo "</tr>"; // Cerrar fila
}
else{
echo "<tr style='background-color:#AAA'>"; // Crear fila pintada
foreach ($array as $key => $value) {
echo "<td style='width:auto'>$value</td>";} 
echo "</tr>"; // Cerrar fila
}
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



?>