<?php

@$reporteGlobal = "SELECT fecha , hora , ticket , evento , rfc , razon_social , usuario , telefono , correo, software , producto , plan , asunto , nivel_atencion , duracion , transferida , status_ticket , adicional , comentarios , ip_asesores.nombre , ip_asesores.area FROM reporteglobal LEFT JOIN ip_asesores ON reporteglobal.ip = ip_asesores.ip WHERE fecha >= '$date1' && fecha <= '$date2' $wherecriterio $whereip ORDER BY id DESC";

@$reporteGlobalVentas = "SELECT fecha , hora , evento , rfc , razon_social , usuario , telefono , correo, tipo_compra, complemento, medio_contacto, motivo_compra, volumen_transacciones, cadena_comercial , software , producto , plan , asunto , duracion , transferida , adicional , comentarios , ip_asesores.nombre , ip_asesores.area FROM reporteglobalventas LEFT JOIN ip_asesores ON reporteglobalventas.ip = ip_asesores.ip WHERE fecha >= '$date1' && fecha <= '$date2' $wherecriterio $whereip ORDER BY id DESC";

@$reporteGlobalAsesor = "SELECT * FROM reporteglobal WHERE ip='$ipuser' && fecha >= '$date1' && fecha <= '$date2' $wherecriterio ORDER BY id DESC";

@$reporteGlobalGratuitos = "SELECT fecha , hora , ticket , evento , rfc , razon_social , usuario , telefono , correo, software , producto , plan , asunto , nivel_atencion , duracion , transferida , status_ticket , comentarios , ip_asesores.nombre , ip_asesores.area FROM reporteglobal LEFT JOIN ip_asesores ON reporteglobal.ip = ip_asesores.ip WHERE plan='GRATUITO' && fecha >= '$date1' && fecha <= '$date2' ORDER BY id DESC";

@$reporteGlobalCobad = "SELECT fecha , hora , ticket , evento , rfc , razon_social , usuario , telefono , correo, software , producto , plan , asunto , nivel_atencion , duracion , transferida , status_ticket , comentarios  , ip_asesores.nombre , ip_asesores.area FROM reporteglobal LEFT JOIN ip_asesores ON reporteglobal.ip = ip_asesores.ip WHERE asunto='COBAD' && fecha >= '$date1' && fecha <= '$date2' ORDER BY id DESC";

@$reporteGlobalRen2013 = "SELECT fecha , hora , ticket , evento , rfc , razon_social , usuario , telefono , correo, software , producto , plan , asunto , nivel_atencion , duracion , transferida , status_ticket , comentarios  , ip_asesores.nombre , ip_asesores.area FROM reporteglobal LEFT JOIN ip_asesores ON reporteglobal.ip = ip_asesores.ip WHERE asunto='REN2013' && fecha >= '$date1' && fecha <= '$date2' ORDER BY id DESC";

@$selectProducto = "SELECT producto FROM productos";

@$selectPlan = "SELECT plan FROM planes";

@$selectAsunto = "SELECT asunto FROM asuntos ORDER BY asunto ASC ";

@$insertReporteGlobal = "INSERT INTO reporteglobal 
       (fecha,hora ,ticket ,evento ,rfc ,razon_social ,usuario , telefono , correo , software , producto ,plan ,asunto ,nivel_atencion ,duracion ,transferida ,comentarios ,status_ticket ,ip , adicional)	
VALUES ('$fecha','$hora','$ticket','$evento','$rfc','$razon_social','$usuario', '$telefono', '$correo', '$software', '$producto','$plan','$asunto','$nivel_atencion','$duracion','$transferida','$comentarios', '$status_ticket' ,'$ip' , '$adicional') ";

@$insertReporteGlobalVentas = "INSERT INTO reporteglobalventas
       (fecha , hora , evento , rfc , razon_social , usuario , telefono , correo, tipo_compra, complemento, medio_contacto, motivo_compra, volumen_transacciones, cadena_comercial , software , producto , plan , asunto , duracion , transferida , comentarios ,ip , adicional)	
VALUES ('$fecha','$hora','$evento','$rfc','$razon_social','$usuario', '$telefono', '$correo', '$tipo_compra', '$complemento', '$medio_contacto', '$motivo_compra', '$volumen_transacciones', '$cadena_comercial' , '$software', '$producto','$plan','$asunto','$duracion','$transferida','$comentarios','$ip','$adicional') ";

@$insertEmpresa = "INSERT INTO empresas (rfc ,razon_social , software , producto ,plan , usuario , telefono , correo)	
VALUES ('$rfc','$razon_social' , '$software', '$producto','$plan' , '$usuario', '$telefono', '$correo') ";

@$updateEmpresa = " UPDATE empresas SET razon_social='$razon_social', producto ='$producto',plan='$plan',software='$software',usuario='$usuario',telefono='$telefono', correo='$correo' WHERE rfc = '$rfc' ";

@$selectEscalacion = "SELECT escalacion FROM escalaciones ORDER BY escalacion ASC";

@$selectAsuntoOfComercial = "SELECT asunto FROM asuntos_ofcomercial ORDER BY asunto ASC ";

@$repOfComerciales = "SELECT id	, fecha	, hora , medio , ticket , status_ticket , clave , oficina , contacto , asunto , escalacion , duracion , comentarios , ip_asesores.nombre , ip_asesores.area FROM repofcomerciales LEFT JOIN ip_asesores ON repofcomerciales.ip = ip_asesores.ip WHERE  fecha >= '$date1' && fecha <= '$date2' $wherecriterio $whereip ORDER BY id DESC"; 

@$OfComerciales = "SELECT * FROM ofcomerciales ORDER BY id ASC";

@$OfComerciales2 = "SELECT socio , contacto , contacto2 FROM ofcomerciales";

@$selectContacto = "SELECT contacto FROM contactos ORDER BY contacto ASC";

@$insertOfcomerciales = "INSERT INTO repofcomerciales 
       (fecha, hora, medio, ticket, status_ticket, clave, oficina, contacto, asunto, escalacion, duracion, comentarios, ip)
VALUES ('$fecha','$hora','$medio','$ticket', '$status_ticket', '$clave','$oficina','$contacto', '$asunto','$escalacion','$duracion','$comentarios','$ip') ";

@$asuntosventas = "SELECT asunto FROM asuntos_ventas ORDER BY asunto ASC ";


?>