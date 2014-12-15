<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="css/ui-lightness/jquery-ui-1.8.20.custom.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--
<meta http-equiv="refresh" content="5" />
-->
<link rel="shortcut icon" href="css/cubo.jpg">
<title><?php echo $title ?></title>
</head>

<body>
<center>

<div align="right">
<form name="reloj12">
<a href="index.php">MI REPORTE</a>&nbsp;&nbsp;&nbsp;
<a href="gratuitos.php">GRATUITOS</a>&nbsp;&nbsp;&nbsp;
<a href="cobad.php">COBAD</a>&nbsp;&nbsp;&nbsp;
<a href="ren2013.php">REN2013</a>&nbsp;&nbsp;&nbsp;
<a href="" onclick="window.open('../cfdtools/', '', ''); return false;">CFDi TOOL</a>&nbsp;&nbsp;&nbsp;
<a href="ofcomerciales.php">OFCOMERCIALES</a>&nbsp;&nbsp;&nbsp;
<input id="reloj" align="right" type="text" size="11" name="digitos">
</form>
</div>

<h1><?php echo $title ?></h1>

<form action="" method="post">

<input type="button"  id="submit" value="Nuevo Ticket" onclick="window.open('tickets.php', '', 'width=450,height=650'); return false;">
<input type="button"  id="submit" value="Nueva Llamada" onclick="window.open('llamadas.php' , '' , 'width=450,height=640,'); return false;">
<input type="button"  id="submit" value="Nuevo Chat" onclick="window.open('chats.php', '', 'width=450,height=550,'); return false;">
<input type="button"  id="submit" value="Of Comerciales" onclick="window.open('form_ofcomerciales.php', '', 'width=450,height=580,'); return false;">
<input id="date1" type="text"  name="date1" value="
<?php
conservarvalor ('date1','fecha inicial');
?>
" title="fecha inicial">
<input id="date2" type="text"  name="date2" value="
<?php
conservarvalor ('date2','fecha final');
?>
" title="fecha final"> 

<input type="submit" id="lupa" value="" title="Buscar por fecha">
<input type="button" id="excel" value="" title="Exportar a Excel" onclick="exportar();">

</form>