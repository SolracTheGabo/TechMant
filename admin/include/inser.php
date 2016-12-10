<?php
#Nuevo Colavorador
function nuevocol($nom_col, $apell_col, $tell_col, $cell_col, $natalicio, $dui, $isss_col, $afp_col, $nit_col, $licencia_col, $tipo_licencia_col, $direc_col, $email_col, $cargo_col, $respon) {
$ncol = "INSERT INTO colavoradores (id_colavor, nom_colaborador, apell_colavorador, tell_colavorador, cell_colavorador, Fecha_nacimiento, dui_col, isss_colavorador, afp_colavorador, nit_colavorador,licencia_colavorador, tipo_licen_colavorador, direccion_colavorador, email_colavorador, cargo_colavorador) VALUES ('', '$nom_col', '$apell_col', '$tell_col', '$cell_col', '$natalicio', '$dui', '$isss_col', '$afp_col', '$nit_col', '$licencia_col', '$tipo_licencia_col', '$direc_col', '$email_col', '$cargo_col')";
		if (mysql_query($ncol)) {$idrecuperado = mysql_insert_id();
		#Funcion para registra bitacora de procesos.
		bita($idrecuperado, 'colavoradores', 'Se registro un nuevo colavorador', date("y-m-d H:i:s"), $respon);
		} else { echo "Error: ". mysql_error();}

		#Control niveles de acceso
		if ($cargo_col <> 1) { $nevel = 2; }else{$nevel = 1;}

#Crear usuario para colaborador
$nikintra = "INSERT INTO intra_usuario (id_intrauser, nick_intrauser, pass_intrauser, status_intrauser, nivel_access_intrauser, cod_colavorador) VALUES ('', '$dui', sha1('pass123456'), 1, '$nevel','$idrecuperado')";
		if (mysql_query($nikintra)) { $idintra = mysql_insert_id();
		bita($idintra, 'intra_usuario', 'Se registro un nuevo usuario interno', date("y-m-d H:i:s"), $respon);
		 //echo "terminado";
		 header("Location: ../nuevocol.php");
		} else {    echo "Error: " .  "<br>" . mysql_error();}
}

#Nuevo Cliente
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

#Nuevo EQ Cliente
function nueqcli($marca, $modelo, $sn_eq, $tipo_eq, $hardw, $observ, $problem, $diagnos, $progreso, $dueno, $tec, $respon) {
$sql = "INSERT INTO equipos_clientes (id_eqclient, marca_eqclient, model_eqclient, SN_eqclient, tipo_eqclient, hardware_eqclient, observaciones_eqclient, problema_eqclient, diagnostico_eqclient, progreso, status, propietario_eqclient, tecnico) VALUES ('', '$marca', '$modelo', '$sn_eq', '$tipo_eq', '$hardw', '$observ', '$problem', '$diagnos', 1, 1, '$dueno', '$tec')";
		if (mysql_query($sql)) { $idrecuperado = mysql_insert_id();
		bita($idrecuperado, 'equipos_clientes', 'Nuevo equipo cliente', date("y-m-d H:i:s"), $respon);
		 header("Location: ../nuevoeqclient.php?var=".$dueno."");
		} else { echo "Error: " . mysql_error();}
}

function Ant($nat, $respon)
{
	$nareat = "INSERT INTO areas_trabajo (id_at, area) VALUES ('', '$nat')";
		if (mysql_query($nareat)) {  $idnat = mysql_insert_id();
		bita($idnat, 'areas_trabajo', 'Se creo una nueva area de trabajo', date("y-m-d H:i:s"), $respon);
		 header("Location: ../nuevaat.php");
		} else { echo "Error: ". mysql_error();}
}

function NuvoCargo($monto, $descripcion, $eqclient, $fecha, $respon)
{
	$ncargao = "INSERT INTO cargos_eqpaciente (id_cargo, monto_cargo, descripcion_cargo, fecha_cargo, cod_eqclient) VALUES ('', '$monto', '$descripcion', '$fecha', '$eqclient')";
			if (mysql_query($ncargao)) {$idrecuperado = mysql_insert_id();
			#Funcion para registra bitacora de procesos.
			bita($idrecuperado, 'cargos_eqpaciente', 'Se registro un nuevo cargo', date("y-m-d H:i:s"), $respon);
			header("Location: ../cargoseq.php?var=".$eqclient."");
			} else { echo "Error: ". mysql_error();}
}
?>
