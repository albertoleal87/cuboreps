<?php

//@$fecha = date("d/m/Y");
@$fecha = date("Y-m-d");
@$hora = date("h:ia");
@$ticket = $_POST['ticket'];
@$evento = $_POST['evento'];
@$rfc = $_POST['rfc'];
@$rfc = str_replace('-', '', $rfc);
@$rfc = str_replace(' ', '', $rfc);
@$razon_social = $_POST['razon_social'];
@$usuario = $_POST['usuario'];
@$telefono = $_POST['telefono'];
@$correo = $_POST['correo'];
@$software = $_POST['software'];
@$producto = $_POST['producto'];
@$plan = $_POST['plan'];
@$asunto = $_POST['asunto'];
@$nivel_atencion = $_POST['nivel_atencion'];
@$duracion = $_POST['display'];
@$transferida = $_POST['transferida'];
@$comentarios = $_POST['comentarios'];
@$status_ticket = $_POST['status_ticket'];
@$ip = $_SERVER['REMOTE_ADDR'];

?>