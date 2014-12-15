<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="css/ui-lightness/jquery-ui-1.8.20.custom.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="css/cubo.jpg">
<title>CUBOREPS</title>
</head>

<body>

<div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <div class="nav-collapse collapse">
            <ul class="nav">
<li class="active"><a>CUBOREPS</a></li>
<li><a onclick="window.open('soporte.php', '', 'width=450,height=685,scrollbars=yes'); return false;">SOPORTE</a></li>
<li><a onclick="window.open('ventas.php', '', 'width=450,height=685,scrollbars=yes'); return false;">VENTAS</a></li>
<li><a onclick="window.open('form_ofcomerciales.php', '', 'width=450,height=580,scrollbars=yes'); return false;">OF. COMERCIALES</a></li>


            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">REPORTES<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  	<li><a href="index.php">SOPORTE</a></li>
                    <li><a href="reporteventas.php">VENTAS</a></li>
                    <li><a href="ofcomerciales.php">OF.COMERCIALES</a></li>
                    <li><a href="gratuitos.php">GRATUITOS</a></li>
                    <li><a href="cobad.php">COBAD</a></li>
                    <li><a href="ren2013.php">REN2013</a></li>
                </ul>
              </li>
            </ul>
           
            <form class="navbar-form pull-right" name="reloj12">

<input id="reloj" class="span2 search-query text-center" type="text" name="digitos">


</form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


<center>

<div align="right">
<form class="form-inline" action=""  method="post">
<input id="date1" class="span2 text-center" placeholder="fecha inicial" type="text"  name="date1" value="
<?php
conservarvalor ('date1','');
?>
" title="fecha inicial">
<input id="date2" class="span2 text-center" placeholder="fecha final" type="text"  name="date2" value="
<?php
conservarvalor ('date2','');
?>
" title="fecha final"> 

<div class="input-append ">  
<div class="btn-group">
<input type="text" name="criterio" class="span3" placeholder="Criterio a buscar" class="span3" value="
<?php
conservarvalor ('criterio','');
?>
"> 
</div>
<select name="tipocriterio" class="span2 btn-inverse">
<option><?php
conservarvalor ('tipocriterio','asunto');
?></option>
<?php
$server = $_SERVER['PHP_SELF'];
@$server = str_replace('/democuboreps/', "", $server);
@$server = str_replace('/cuboreps/', "", $server);
if ($server == 'ofcomerciales.php')
{
echo<<<formulario
<option>id</option>
<option>fecha</option>
<option>hora</option>
<option>medio</option>
<option>ticket</option>
<option>status_ticket</option>
<option>clave</option>
<option>oficina</option>
<option>contacto</option>
<option>asunto</option>
<option>escalacion</option>
<option>duracion</option>
<option>comentarios</option>
<option>nombre</option>
<option>area</option>
formulario;
}
else {
echo<<<formulario
<option>ticket</option>
<option>evento</option>
<option>rfc</option>
<option>razon_social</option>
<option>usuario</option>
<option>telefono</option>
<option>correo</option>
<option>software</option>
<option>producto</option>
<option>plan</option>
<option>asunto</option>
<option>nivel_atencion</option>   
<option>transferida</option>
<option>status_ticket</option>
<option>adicional</option>
<option>comentarios</option>
<option>nombre</option>
<option>area</option>
formulario;
}
?>
</select>

</div>
<button type="submit" class="btn btn-inverse">
<i class="icon-search icon-white"></i>&nbsp;Search      
</button> 
<button type="button" class="btn btn-success" onClick="exportar();"><i class="icon-download icon-white"></i>&nbsp;&nbsp;Export Excel</button> 
<button type="button"  class="btn btn-success" onClick="exportarcsv();"><i class="icon-download icon-white"></i>&nbsp;&nbsp;Export Csv</button> 
</div>

</form>