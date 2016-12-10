<?php
function bita($regcod, $tname, $process, $date, $creator)
{
	$sql = "INSERT INTO bitacora (cod_registro, tabla_afectado, nom_proceso, fecha_proceso, creador_proceso) VALUES ('$regcod', '$tname', '$process', '$date', '$creator')";
if (mysql_query($sql)) { echo "<a href='../index.php'> Bitacara creada.</a>";
} else {    echo "Error: ". mysql_error();}
}
?>
