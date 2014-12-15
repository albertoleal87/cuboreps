<?php
$server = mysql_connect("", "", "") or die (mysql_error());
mysql_select_db("", $server) or die (mysql_error());
mysql_query("SET NAMES 'utf8'");
?>