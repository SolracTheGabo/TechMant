<?php
include '../include/link.php';
include '../include/bita.php';
include '../include/inser.php';
include '../include/update.php';

$accion = htmlentities($_POST['accion']);

switch ($accion) {
	case 'nuevoclient':
		$nom = htmlentities($_POST['nom']);
		$apell = htmlentities($_POST['apell']);
		$tell = htmlentities($_POST['num']);
		$email = htmlentities($_POST['email']);
		$respon = htmlentities($_POST['respon']);
		doblada($nom, $apell, $tell, $email, $respon);
		break;

	case 'col':
		$nom_col = htmlentities($_POST['nomcol']);
		$apell_col = htmlentities($_POST['apellcol']);
		$tell_col = htmlentities($_POST['tellcol']);
		$cell_col = htmlentities($_POST['cellcol']);
		$natalicio = htmlentities($_POST['natalicio']);
		$dui = htmlentities($_POST['dui']);
		$isss_col = htmlentities($_POST['issscol']);
		$afp_col = htmlentities($_POST['afpcol']);
		$nit_col = htmlentities($_POST['nitcol']);
		$licencia_col = htmlentities($_POST['licenciacol']);
		$tipo_licencia_col = htmlentities($_POST['tlicenciacol']);
		$direc_col = htmlentities($_POST['direccol']);
		$email_col = htmlentities($_POST['emailcol']);
		$cargo_col = htmlentities($_POST['area']);
		$respon = htmlentities($_POST['respon']);
		nuevocol($nom_col, $apell_col, $tell_col, $cell_col, $natalicio, $dui, $isss_col, $afp_col, $nit_col, $licencia_col, $tipo_licencia_col, $direc_col, $email_col, $cargo_col, $respon);
		break;

	case 'neqcli':
		$marca = htmlentities($_POST['marca']);
		$modelo = htmlentities($_POST['modelo']);
		$sn_eq = htmlentities($_POST['sn']);
		$tipo = htmlentities($_POST['tipo']);
		$hardw = htmlentities($_POST['hardware']);
		$observ = htmlentities($_POST['observa']);
		$problem = htmlentities($_POST['problema']);
		$diagnos = htmlentities($_POST['diagnos']);
		$progreso = htmlentities($_POST['progreso']);
		$dueno = htmlentities($_POST['dueno']);
		$respon = htmlentities($_POST['respon']);
		$tec = htmlentities($_POST['tec']);
		nueqcli($marca, $modelo, $sn_eq, $tipo, $hardw, $observ, $problem, $diagnos, $progreso, $dueno, $tec, $respon);
		break;

	case 'nat':
		$nat = htmlentities($_POST['nat']);
		$respon = htmlentities($_POST['respon']);
		Ant($nat, $respon);
		break;

case 'chaclient':
		$codigo = htmlentities($_POST['cod']);
		$nombre = htmlentities($_POST['nom']);
		$apellido = htmlentities($_POST['apell']);
		$telefono = htmlentities($_POST['num']);
		$correo = htmlentities($_POST['email']);
		$respon = htmlentities($_POST['respon']);
		ChainClient($codigo, $nombre, $apellido, $telefono, $correo, $respon);
	break;

	case 'chapass':
		$nick = htmlentities($_POST['cod']);
		$npass1 = htmlentities($_POST['npass1']);
		$npass2 = htmlentities($_POST['npass2']);
		$oldpass = htmlentities($_POST['oldpass']);
		$respon = htmlentities($_POST['respon']);
			if ($npass1 == $npass2) {
				ChaPass($nick, sha1($npass1), sha1($oldpass), $respon);
			}else {
				echo '<script languaje="javascript">alert("La clave nueva no coninceden");location.href = "../chapass.php?var="'.$fila[1].'"; </script>';
			}
		break;

	case 'updacol':
		$cod = htmlentities($_POST['var']);
		$nomcol = htmlentities($_POST['nomcol']);
		$apellcol = htmlentities($_POST['apellcol']);
		$tellcol = htmlentities($_POST['tellcol']);
		$cellcol = htmlentities($_POST['cellcol']);
		$natalicio = htmlentities($_POST['natalicio']);
		$dui = htmlentities($_POST['dui']);
		$issscol = htmlentities($_POST['issscol']);
		$afpcol = htmlentities($_POST['afpcol']);
		$nitcol = htmlentities($_POST['nitcol']);
		$licenciacol = htmlentities($_POST['licenciacol']);
		$tlicenciacol = htmlentities($_POST['tlicenciacol']);
		$emailcol = htmlentities($_POST['emailcol']);
		$area = htmlentities($_POST['area']);
		$respon = htmlentities($_POST['respon']);
		ChaCol($cod, $nomcol, $apellcol, $tellcol, $cellcol, $natalicio, $dui, $issscol, $afpcol, $nitcol, $licenciacol, $tlicenciacol, $emailcol, $area, $respon);

		break;

		case 'nuevocargo':
		$monto = htmlentities($_POST['monto']);
		$descripcion = htmlentities($_POST['descrip']);
		$eqclient = htmlentities($_POST['var']);
		$fecha = date("y-m-d H:i:s");
		$respon = htmlentities($_POST['respon']);
		NuvoCargo($monto, $descripcion, $eqclient, $fecha, $respon);
		break;

	default:
		echo "Estoy por defecto";
		break;
}

?>
