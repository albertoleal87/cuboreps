<?php
$title = "Ren2013";
date_default_timezone_set("America/Monterrey");
require_once('php/funciones.php');
require_once('header.php');

?>

<form action="php/ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />

<?php



// $selectreporteglobal = "SELECT id , fecha , hora , ticket , evento , rfc , razon_social , usuario , producto , plan , asunto , nivel_atencion , duracion , transferida , status_ticket , comentarios , reporteglobal.ip , ip_asesores.nombre FROM reporteglobal LEFT JOIN ip_asesores ON reporteglobal.ip = ip_asesores.ip WHERE fecha >= SUBDATE(CURDATE(), INTERVAL 2 DAY) ORDER BY id ASC LIMIT 10  ";
@$ipuser = $_SERVER['REMOTE_ADDR'];
@$date1 = $_POST['date1'];
@$date2 = $_POST['date2'];

if(isset($date1) && isset($date2) && !empty($date1) && !empty($date2) && $date1 != 'fecha inicial' && $date2 != 'fecha final' )
{
require_once('php/querys.php');
reporteDinamico($reporteGlobalRen2013);	
}
else{
@$date1 = "";
@$date2 = date("Y-m-d");
require_once('php/querys.php');
reporteDinamico($reporteGlobalRen2013);
} 


?>

</form>
</body>
</html>

