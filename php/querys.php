<?php

// completo $selectreporteglobal = "SELECT id , fecha , hora , ticket , evento , rfc , razon_social , usuario , producto , plan , asunto , nivel_atencion , duracion , transferida , status_ticket , comentarios , reporteglobal.ip , ip_asesores.nombre FROM reporteglobal LEFT JOIN ip_asesores ON reporteglobal.ip = ip_asesores.ip WHERE fecha >= '$date1' && fecha <= '$date2' ORDER BY id ASC";
            $selectreporteglobal = "SELECT fecha , hora , ticket , evento , rfc , razon_social , usuario , producto , plan , asunto , nivel_atencion , duracion , transferida , status_ticket , comentarios , ip_asesores.nombre FROM reporteglobal LEFT JOIN ip_asesores ON reporteglobal.ip = ip_asesores.ip WHERE fecha >= '$date1' && fecha <= '$date2' ORDER BY id ASC";

?>