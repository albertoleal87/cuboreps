<?php

@$reporteGlobalConcentrado = "SELECT fecha , hora , ticket , evento , rfc , razon_social , usuario , telefono , correo, software , producto , plan , asunto , nivel_atencion , duracion , transferida , status_ticket , comentarios , reporteglobal.ip , ip_asesores.nombre , ip_asesores.area FROM reporteglobal LEFT JOIN ip_asesores ON reporteglobal.ip = ip_asesores.ip WHERE fecha >= '$date1' && fecha <= '$date2' ORDER BY id DESC";

@$reporteGlobalAsesor = "SELECT * FROM reporteglobal WHERE ip='$ipuser' && fecha >= '$date1' && fecha <= '$date2' ORDER BY id DESC";

@$reporteGlobalGratuitos = "SELECT fecha , hora , ticket , evento , rfc , razon_social , usuario , telefono , correo, software , producto , plan , asunto , nivel_atencion , duracion , transferida , status_ticket , comentarios , reporteglobal.ip , ip_asesores.nombre FROM reporteglobal LEFT JOIN ip_asesores ON reporteglobal.ip = ip_asesores.ip WHERE plan='GRATUITO' && fecha >= '$date1' && fecha <= '$date2' ORDER BY id ASC";

@$reporteGlobalCobad = "SELECT fecha , hora , ticket , evento , rfc , razon_social , usuario , telefono , correo, software , producto , plan , asunto , nivel_atencion , duracion , transferida , status_ticket , comentarios  , reporteglobal.ip , ip_asesores.nombre FROM reporteglobal LEFT JOIN ip_asesores ON reporteglobal.ip = ip_asesores.ip WHERE asunto='COBAD' && fecha >= '$date1' && fecha <= '$date2' ORDER BY id ASC";

@$reporteGlobalRen2013 = "SELECT fecha , hora , ticket , evento , rfc , razon_social , usuario , telefono , correo, software , producto , plan , asunto , nivel_atencion , duracion , transferida , status_ticket , comentarios  , reporteglobal.ip , ip_asesores.nombre FROM reporteglobal LEFT JOIN ip_asesores ON reporteglobal.ip = ip_asesores.ip WHERE asunto='REN2013' && fecha >= '$date1' && fecha <= '$date2' ORDER BY id ASC";

@$selectProducto = "SELECT producto FROM productos";

@$selectPlan = "SELECT plan FROM planes";

@$selectAsunto = "SELECT asunto FROM asuntos ORDER BY asunto ASC ";

@$insertReporteGlobal = "INSERT INTO reporteglobal 
       (`fecha`,`hora` ,`ticket` ,`evento` ,`rfc` ,`razon_social` ,`usuario` , `telefono` , `correo` , `software` , `producto` ,`plan` ,`asunto` ,`nivel_atencion` ,`duracion` ,`transferida` ,`comentarios` ,`status_ticket` ,`ip`)	
VALUES ('$fecha','$hora','$ticket','$evento','$rfc','$razon_social','$usuario', '$telefono', '$correo', '$software', '$producto','$plan','$asunto','$nivel_atencion','$duracion','$transferida','$comentarios','$status_ticket','$ip') ";

@$insertEmpresa = "INSERT INTO empresas (`rfc` ,`razon_social` , `software` , `producto` ,`plan` , `usuario` , `telefono` , `correo`)	
VALUES ('$rfc','$razon_social' , '$software', '$producto','$plan' , '$usuario', '$telefono', '$correo') ";

@$updateEmpresa = " UPDATE empresas SET `razon_social`='$razon_social', `producto` ='$producto',`plan`='$plan',`software`='$software',`usuario`='$usuario',`telefono`='$telefono', correo='$correo' WHERE rfc = '$rfc' ";

@$selectEscalacion = "SELECT escalacion FROM escalaciones ORDER BY escalacion ASC";

@$selectAsuntoOfComercial = "SELECT asunto FROM asuntos_ofcomercial ORDER BY asunto ASC ";

@$repOfComerciales = "SELECT id	, fecha	, hora , medio , ticket , status_ticket , clave , oficina , contacto , asunto , escalacion , duracion , comentarios , ip_asesores.nombre FROM repofcomerciales LEFT JOIN ip_asesores ON repofcomerciales.ip = ip_asesores.ip WHERE  fecha >= '$date1' && fecha <= '$date2' ORDER BY id DESC";  //repofcomerciales.ip='$ipuser' &&

@$OfComerciales = "SELECT * FROM ofcomerciales ORDER BY id ASC";

@$OfComerciales2 = "SELECT socio , contacto , contacto2 FROM ofcomerciales";

@$selectContacto = "SELECT contacto FROM contactos ORDER BY contacto ASC";

@$insertOfcomerciales = "INSERT INTO repofcomerciales 
       (`fecha`, `hora`, `medio`, `ticket`, `status_ticket`, `clave`, `oficina`, `contacto`, `asunto`, `escalacion`, `duracion`, `comentarios`, `ip`)
VALUES ('$fecha','$hora','$medio','$ticket', '$status_ticket', '$clave','$oficina','$contacto', '$asunto','$escalacion','$duracion','$comentarios','$ip') ";




?>