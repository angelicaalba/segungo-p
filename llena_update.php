<?php
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
$bd_conexion=mysql_select_db("ejemplo",$conexion);
$sql = "update alumno set nombre='$nombre', apellido='$apellido' where ci='$ci'";
$consulta=mysql_query($sql);
?>