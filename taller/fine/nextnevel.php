<?php
include '../include/link.php';

$eleq = $_GET['next'];
$mas = 25;

	$result = mysql_query("SELECT progreso, status FROM equipos_clientes WHERE id_eqclient = '$eleq'");
    $row = mysql_fetch_row($result);


    if ($row[0] == 100) {
    	header("Location: ../addcargo.php?var=".$eleq."");
    }else{

   	 	$next = $mas + $row[0];
    
    $updateeq = "UPDATE equipos_clientes SET progreso = '$next' WHERE id_eqclient = '$eleq'";
  if (mysql_query($updateeq) or die(mysql_error())) {
     header("Location: ../addcargo.php?var=".$eleq."");
  }else {
    echo '<script languaje="javascript">alert("No se pudo realizar la actualizacion");location.href = "../addcargo.php?var='.$eleq.'"; </script>';
  }
}

?>