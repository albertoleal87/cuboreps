<?php
header ('Content-type: application/json');
$rfc = $_POST['rfc']; 

$rfc = str_replace('-', '', $rfc);
$rfc = str_replace(' ', '', $rfc);

if($rfc == "N/A"){$rfc = "";}
if($rfc == "NA"){$rfc = "";}
if($rfc == "AAA010101AAA"){$rfc = "";}

$mysql_connect = mysql_connect("", "", "") or die (mysql_error());
mysql_select_db("", $mysql_connect) or die (mysql_error());
$query = "SELECT * FROM empresas WHERE rfc = '$rfc' ";
$mysql_query = mysql_query($query) or die (mysql_error());
$row = mysql_fetch_array($mysql_query);
mysql_close($mysql_connect);

$mysql_connect2 = mysql_connect("", "", "") or die (mysql_error());
mysql_select_db("", $mysql_connect2) or die (mysql_error());
$query2 = "SELECT telefono , usuario , correo FROM usuarios WHERE rfc = '$rfc' ORDER BY id DESC LIMIT 1 ";
$mysql_query2 = mysql_query($query2) or die (mysql_error());
$row2 = mysql_fetch_array($mysql_query2);
mysql_close($mysql_connect2);

$arr = $row+$row2;

print json_encode($arr);

?>