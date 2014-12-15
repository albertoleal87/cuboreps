<?php
header ('Content-type: application/json');

$ticket = $_POST['ticket']; 

if (isset($ticket) && !empty($ticket))
{
$mysql_connect3 = mysql_connect("", "", "") or die (mysql_error());
mysql_select_db("", $mysql_connect3) or die (mysql_error()); 
$query3 = "SELECT rfc , razon_social , producto , plan , software , asunto , telefono , usuario , correo FROM reporteglobal WHERE ticket = '$ticket' ORDER BY id DESC LIMIT 1 ";
$mysql_query3 = mysql_query($query3) or die (mysql_error());
$fromtkt['fromtkt'] = mysql_fetch_assoc($mysql_query3);
mysql_close($mysql_connect3);
print json_encode($fromtkt);
}

?>