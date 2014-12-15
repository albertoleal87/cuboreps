<?php
header ('Content-type: application/json');

$ticket = $_POST['ticket']; 

if (isset($ticket) && !empty($ticket))
{
require_once('mysqlconnect.php');
$query3 = "SELECT rfc , razon_social , producto , plan , software , asunto , telefono , usuario , correo FROM reporteglobal WHERE ticket = '$ticket' ORDER BY id DESC LIMIT 1 ";
$mysql_query3 = mysql_query($query3) or die (mysql_error());
$row = mysql_fetch_assoc($mysql_query3);
$fromtkt['fromtkt'] = $row ;
mysql_close($mysql_connect);
print json_encode($fromtkt);
}

?>