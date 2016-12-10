<?php
include '../include/link.php';
$usuario = $_POST["nick"];
$password = $_POST["contra"];
$result = mysql_query("SELECT nick_intrauser, pass_intrauser FROM intra_usuario WHERE nick_intrauser = '$usuario' AND status_intrauser = 1 AND nivel_access_intrauser = 2");
if($row = mysql_fetch_row($result))
{
 if($row[1] == sha1($password))
 {
  session_start();
  $_SESSION['usuario'] = $usuario;
  header("Location: ../index.php");
 }
 else
 {
    echo '<script languaje="javascript">
    alert("Contraseña incorrecta");
    location.href = "../../login2.html";
   </script>';
 }
}
else
{
  echo '<script languaje="javascript">
    alert("Usuario incorrecto, o tu cuenta no tiene permiso para acceder a este mudulo");
    location.href = "../../login2.html";
   </script>';
 }
mysql_free_result($result);
mysql_close();
?>
