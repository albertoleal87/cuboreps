<?php
header ('Content-type: application/json');

$rfc = $_POST['rfc']; 
$rfc = str_replace('-', '', $rfc);
$rfc = str_replace(' ', '', $rfc);
if($rfc == "N/A"){$rfc = "";}
if($rfc == "NA"){$rfc = "";}
if($rfc == "AAA010101AAA"){$rfc = "";}

if (isset($rfc) && !empty($rfc))
{
$mysql_connect = mysql_connect("", "", "") or die (mysql_error());
mysql_select_db("", $mysql_connect) or die (mysql_error());
$query = "SELECT razon_social , producto , plan , software , telefono , usuario , correo FROM empresas WHERE rfc = '$rfc' ";
$mysql_query = mysql_query($query) or die (mysql_error());
$row = mysql_fetch_assoc($mysql_query);
mysql_close($mysql_connect);

$fromrfc['fromrfc'] = $row ;

print json_encode($fromrfc);
}



?>