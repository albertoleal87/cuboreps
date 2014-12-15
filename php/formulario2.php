<?php

date_default_timezone_set("America/Monterrey");

?>

<html on xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../css/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../js/scripts.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cubo reps</title>
</head>

<body onload="IniciarCrono()">

<center>

<div id="divticket">
<form name="crono">
<input id="reloj" type="text" size="8" name="display" value="00:00:0"> 
</form>
<?php

include('../php/formulario.php');

?>

</div>







</body>
</html>
