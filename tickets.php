<?php
date_default_timezone_set("America/Monterrey");
require_once('php/funciones.php');
require_once('php/querys.php');

$title="TICKET";
$displayticket   = "";
$displayllamada = "style='display:none'";


require_once('php/formulario.php');
require_once('php/variables.php');

//@$ticket = "N/A";
@$transferida = "N/A";
//@$status_ticket = "N/A";



if (
isset($fecha) && !empty($fecha)
&& isset($hora) && !empty($hora)
&& isset($ticket) && !empty($ticket)
&& isset($evento) && !empty($evento)
&& isset($rfc) && !empty($rfc)
&& isset($razon_social) && !empty($razon_social)
&& isset($usuario) && !empty($usuario)
&& isset($producto) && !empty($producto)
&& isset($plan) && !empty($plan)
&& isset($asunto) && !empty($asunto)
&& isset($nivel_atencion) && !empty($nivel_atencion)
&& isset($duracion) && !empty($duracion)
&& isset($transferida) && !empty($transferida)
&& isset($status_ticket) && !empty($status_ticket)
&& isset($ip) && !empty($ip)
)

{
include('php/querys.php');	

if (simpleQuery($insertReporteGlobal))

{
simpleQuery($insertEmpresa);
simpleQuery($updateEmpresa);

echo "<script type='text/javascript'>window.opener.document.location='index.php'; alert('Datos ingresados con exito!!!');  close();</script>";}

else {echo "<script type='text/javascript'>alert(' Error al insertar.'); </script>";}

}

elseif (isset($duracion))
{echo "<script type='text/javascript'>alert('Hay uno o mas campos vacios');</script>";}
?>


</body>
</html>