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
require_once('mysqlconnect.php');
$query = "SELECT razon_social , producto , plan , software , telefono , usuario , correo FROM empresas WHERE rfc = '$rfc' ";
$mysql_query = mysql_query($query) or die (mysql_error());
$row = mysql_fetch_assoc($mysql_query);
$fromrfc['fromrfc'] = $row;
mysql_close($mysql_connect);
print json_encode($fromrfc);
}

?>