<?php
$link = mysql_connect('127.0.0.1', 'root', 'powersql') or die('No se pudo conectar: ' . mysql_error());
mysql_set_charset('utf8',$link);
//echo 'Coneccion establesida con BDD Server  </br>';
mysql_select_db('tech') or die('No se pudo seleccionar la base de datos');
?>