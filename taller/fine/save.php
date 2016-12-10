<?php
include '../include/link.php';
include '../include/bita.php';
include '../include/inser.php';
include '../include/update.php';

$accion = htmlentities($_POST['accion']);

switch ($accion) {
	case 'nuevocargo':
		$monto = htmlentities($_POST['monto']);
		$descripcion = htmlentities($_POST['descrip']);
		$eqclient = htmlentities($_POST['var']);
		$fecha = date("y-m-d H:i:s");
		$respon = htmlentities($_POST['respon']);
		NuvoCargo($monto, $descripcion, $eqclient, $fecha, $respon);
		break;

		case 'nuevoclient':
			$nom = htmlentities($_POST['nom']);
			$apell = htmlentities($_POST['apell']);
			$tell = htmlentities($_POST['num']);
			$email = htmlentities($_POST['email']);
			$respon = htmlentities($_POST['respon']);
			doblada($nom, $apell, $tell, $email, $respon);
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
				$tec = htmlentities($_POST['yotec']);
				nueqcli($marca, $modelo, $sn_eq, $tipo, $hardw, $observ, $problem, $diagnos, $progreso, $dueno, $tec, $respon);
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
	default:
		echo "Estoy por defecto";
		break;
}

?>
