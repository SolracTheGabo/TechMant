<?php
function NuvoCargo($monto, $descripcion, $eqclient, $fecha, $respon)
{
	$ncargao = "INSERT INTO cargos_eqpaciente (id_cargo, monto_cargo, descripcion_cargo, fecha_cargo, cod_eqclient) VALUES ('', '$monto', '$descripcion', '$fecha', '$eqclient')";
			if (mysql_query($ncargao)) {$idrecuperado = mysql_insert_id();
			#Funcion para registra bitacora de procesos.
			bita($idrecuperado, 'cargos_eqpaciente', 'Se registro un nuevo cargo', date("y-m-d H:i:s"), $respon);
			header("Location: ../addcargo.php?var=".$eqclient."");
			} else { echo "Error: ". mysql_error();}
}

function doblada($nom, $apell, $tell, $email, $respon) {
$client = "INSERT INTO Clientes (id_client, nom_client, apell_client, tell_client, email_client) VALUES ('', '$nom', '$apell', '$tell', '$email')";
		if (mysql_query($client)) {  $idrecuperado = mysql_insert_id();
		bita($idrecuperado, 'Clientes', 'Nuevo cliente', date("y-m-d H:i:s"), $respon);
		} else {    echo "Error: " . mysql_error();}

#Nuevo usuario
$nikclient = "INSERT INTO usuario_client (id_usuclient, nick_usuclient, pass_usuclient, status_usuclient, idcod_usuclient) VALUES ('', '$email', sha1('pass123456'), 1, '$idrecuperado')";
		if (mysql_query($nikclient)) {  $idusuariocli = mysql_insert_id();
		bita($idusuariocli, 'usuario_client', 'Nuevo ususario cliente', date("y-m-d H:i:s"), $respon);
		 header("Location: ../nuevoeqclient.php?var=".$idrecuperado."");
		} else { echo "Error: " . mysql_error();}
}

#Nuevo equipo cliente
function nueqcli($marca, $modelo, $sn_eq, $tipo_eq, $hardw, $observ, $problem, $diagnos, $progreso, $dueno, $tec, $respon) {
$sql = "INSERT INTO equipos_clientes (id_eqclient, marca_eqclient, model_eqclient, SN_eqclient, tipo_eqclient, hardware_eqclient, observaciones_eqclient, problema_eqclient, diagnostico_eqclient, progreso, status, propietario_eqclient, tecnico) VALUES ('', '$marca', '$modelo', '$sn_eq', '$tipo_eq', '$hardw', '$observ', '$problem', '$diagnos', 1, 1, '$dueno', '$tec')";
		if (mysql_query($sql)) { $idrecuperado = mysql_insert_id();
		bita($idrecuperado, 'equipos_clientes', 'Nuevo equipo cliente', date("y-m-d H:i:s"), $respon);
		 header("Location: ../nuevoeqclient.php?var=".$dueno."");
		} else { echo "Error: " . mysql_error();}
}

function NuevaVenta($monto, $efectivo, $total_cuenta, $cambio, $descu, $descuento, $fecha_venta, $cod_client, $cod_eqclient, $respon)
{
	$sql = "INSERT INTO ventas (monto_venta, efectivo, total_cuenta,cambio, descuento, porcentaje_descuento, facha_venta, cod_client, cod_eqclient, cod_vendedor)
	VALUES ( '$monto', '$efectivo', '$total_cuenta','$cambio', '$descu', '$descuento', '$fecha_venta', '$cod_client',  '$cod_eqclient' , '$respon' )";
			if (mysql_query($sql)) { $idrecuperado = mysql_insert_id();
			bita($idrecuperado, 'ventas', 'Nueva venta realizada', date("y-m-d H:i:s"), $respon);
			header("Location: ../sumCuenta.php?var=".$idrecuperado."");
		 } else { echo "Error: " . mysql_error();}
	}

?>
