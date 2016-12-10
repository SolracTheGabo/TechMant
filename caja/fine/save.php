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
				$tec = htmlentities($_POST['tec']);
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

				case 'cuenta':
					$efectivo = htmlentities($_POST['efectivo']);
					$descuento = htmlentities($_POST['descuento']);
					$monto = htmlentities($_POST['monto']);
					$tec = htmlentities($_POST['tec']);
					$cod_client = htmlentities($_POST['cliente']);
					$cod_eqclient = htmlentities($_POST['eqclient']);
					$respon = htmlentities($_POST['respon']);

					if ($descuento == 1) {
						$descu = $monto * 0.10;
					}elseif ($descuento == 2) {
							$descu = $monto * 0.20;
					}elseif ($descuento == 3) {
						$descu = $monto * 0.30;
					}else {
						$descu = $monto;
					}
						echo $efectivo.'efectivo</br>';
						echo $monto.' Monot<br/>';
						echo $descu.' -descuento<br/>';
						echo $total_cuenta = $monto - $descu.' Total a pagar<br/>';
						echo $cambio = $efectivo - $total_cuenta.' Cambio<br/>';

						echo 'Cleinte'.$cod_eqclient.'<br />';

					NuevaVenta($monto, $efectivo, $total_cuenta, $cambio, $descu, $descuento, date("y-m-d H:i:s"), $cod_client, $cod_eqclient, $respon);
					break;

	default:
		echo "Estoy por defecto";
		break;
}

?>
