<?php
$title = "Oficinas comerciales";
date_default_timezone_set("America/Monterrey");
require_once('php/funciones.php');
require_once('header.php');

?>

<form action="php/ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion" accept-charset="UTF-8">
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />

<?php
	
@$ipuser = $_SERVER['REMOTE_ADDR'];
@$date1 = $_POST['date1'];
@$date2 = $_POST['date2'];

if(isset($date1) && isset($date2) && !empty($date1) && !empty($date2) && $date1 != 'fecha inicial' && $date2 != 'fecha final' )
{
require_once('php/querys.php');	
reporteDinamico($repOfComerciales);	
}
else{
@$date1 = date("Y-m-d");
@$date2 = date("Y-m-d");
require_once('php/querys.php');
reporteDinamico($repOfComerciales);
} 

?>
</form>
</body>
</html>

