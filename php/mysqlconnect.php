<?php
$mysql_connect = mysql_connect('', '', '') or die (mysql_error());
mysql_select_db("", $mysql_connect) or die (mysql_error());
mysql_query("SET NAMES 'utf8'");
?>