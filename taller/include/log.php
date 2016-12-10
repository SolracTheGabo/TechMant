<?php
include '../include/link.php';
function login($nick, $pass)
{
	$result = mysql_query("SELECT nick_intrauser, pass_intrauser FROM intra_usuario WHERE nick_intrauser = $nick AND pass_intrauser = $pass") or die (mysql_error());  

	while ($row = mysql_fetch_row($result)){   
			echo $row;
	}
}
?>