<?php

function ChainClient($cod, $nombre, $apellido, $telefono, $email, $respon)
{
  $updatecli = "UPDATE Clientes SET nom_client = '$nombre', apell_client = '$apellido', tell_client = '$telefono', email_client = '$email' WHERE Id_client = '$cod'";
  if (mysql_query($updatecli) or die(mysql_error())) {
    bita($cod, 'Clientes', 'Actualizacion de registro', date("y-m-d H:i:s"), $respon);
     header("Location: ../chaclient.php?var=".$cod."");
  }else {
    echo '<script languaje="javascript">alert("No se pudo realizar la actualizacion");location.href = "../"; </script>';
  }

}

function ChaPass($nick, $npass1, $oldpass, $respon)
{
  $propi = mysql_query("SELECT id_intrauser , pass_intrauser FROM intra_usuario WHERE nick_intrauser = '$nick'");
  $fila = mysql_fetch_row($propi) or die(mysql_error());
    if ($oldpass == $fila[1]) {
      $updatecli = "UPDATE intra_usuario SET  pass_intrauser = '$npass1' WHERE  nick_intrauser = '$fila[0]'";
                  if (mysql_query($updatecli) or die(mysql_error())) {
                    bita($fila[0], 'intra_usuario', 'Actualizacion de registro', date("y-m-d H:i:s"), $respon);
                   header("Location: ../chapass.php?var=".$nick."");
                      }else {
                          echo '<script languaje="javascript">alert("No se pudo realizar la actualizacion");location.href = "../"; </script>';
                        }
      }else {
              echo '<script languaje="javascript">alert("La clave actual es incorrecta");location.href = "../"; </script>';
          }
}

function ChaCol($cod, $nomcol, $apellcol, $tellcol, $cellcol, $natalicio, $dui, $issscol, $afpcol, $nitcol, $licenciacol, $tlicenciacol, $emailcol, $area, $respon)
{
      $updatecli = "UPDATE colavoradores SET  nom_colaborador = '$nomcol', apell_colavorador = '$apellcol', tell_colavorador = '$tellcol', cell_colavorador = '$cellcol', Fecha_nacimiento = '$natalicio', dui_col = '$dui', isss_colavorador = '$issscol', afp_colavorador = '$afpcol', nit_colavorador = '$nitcol', licencia_colavorador = '$licenciacol', tipo_licen_colavorador = '$tlicenciacol', email_colavorador = '$emailcol', cargo_colavorador ='$area' WHERE  id_colavor  = '$cod'";
                  if (mysql_query($updatecli) or die(mysql_error())) {
                  	bita($cod, 'colavoreadores', 'Actualizacion de registro', date("y-m-d H:i:s"), $respon);
                    header("Location: ../updatecol.php?var=".$cod."");
                      }else {
                          echo '<script languaje="javascript">alert("No se pudo realizar la actualizacion");location.href = "../"; </script>';
                        }
}
 ?>
