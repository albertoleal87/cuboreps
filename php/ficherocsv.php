<?php
$fecha = date("d/m/Y");
header('Content-Type: text/csv; charset=utf-8');
header("Content-Disposition: filename=reporte_$fecha.csv");
header("Pragma: no-cache");
header("Expires: 0");

$query = $_POST['query'];


$query = str_replace('\\', '', $query) ;

function reporteDinamico ($query)
{
require_once('mysqlconnect.php');
$mysql_query = mysql_query($query) or die (mysql_error());
$mysql_num_fields = mysql_num_fields($mysql_query);
$mysql_num_rows = mysql_num_rows($mysql_query);
for ($i = 0;$i < $mysql_num_fields;$i++) 
{$mysql_field_name = mysql_field_name($mysql_query, $i);
echo "$mysql_field_name,";} // Crear encabezados
echo "\n"; // Cerrar fila
while ($array = mysql_fetch_assoc($mysql_query)) 
{
foreach ($array as $key => $value) {
@$value = str_replace(",", " ", $value);
@$value = str_replace("\n", " ", $value);
@$value = str_replace("\r", " ", $value);
@$value = str_replace("\r\n", " ", $value);

echo "$value,";} 
echo "\n"; // Cerrar fila
}
mysql_close($mysql_connect);
}



reporteDinamico ($query);

?>


