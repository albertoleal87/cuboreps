<?php
date_default_timezone_set("America/Monterrey");
require_once('php/funciones.php');
require_once('header.php');

?>

<form action="php/ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />

<?php

@$ip = $_SERVER['REMOTE_ADDR'];
@$date1 = $_POST['date1'];
@$date2 = $_POST['date2'];
@$criterio = $_POST['criterio'];
@$tipocriterio = $_POST['tipocriterio'];

if(empty($date1))
{
@$date1 = date("Y-m-d");
}

if(empty($date2)) 
{
@$date2 = date("Y-m-d");
}

if(isset($criterio) && !empty($criterio) && isset($tipocriterio) && !empty($tipocriterio)) 
{
@$wherecriterio =  "&& ".$tipocriterio." LIKE '%$criterio%' "; 
}

else {
@$wherecriterio = "";
}

if(  
$_SERVER['SERVER_NAME'] == "localhost"
)

{$whereip = " ";}

else 
{
$whereip = " && reporteglobalventas.ip = '$ip' ";
}

require_once('php/querys.php');


reporteDinamico($reporteGlobalVentas);



?>

</form>


<form action="php/ficherocsv.php" method="post" target="_blank" id="FormularioExportacioncsv">
<input type="hidden" name="query" id="query" value="<?php echo $reporteGlobalVentas; ?>" />
</form

</body>
</html>

