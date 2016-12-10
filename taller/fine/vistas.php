<?php
#Extrae el nombre del colavorador con el nickname y comparamos el cod ID para confirmar
function session($user)
{
    $result = mysql_query("SELECT id_intrauser, nick_intrauser, nom_colaborador, apell_colavorador FROM intra_usuario, colavoradores WHERE nick_intrauser = '$user' AND id_colavor = cod_colavorador");
    $row = mysql_fetch_row($result);
    echo $row[2]." ".$row[3];
    echo '<input type="hidden" name="respon" value="' . $row[0] . ' ">';

}

#Vista para el Dashboard
function ViewDash($usertec)
{

   $eqcli = mysql_query("SELECT COUNT(*) FROM equipos_clientes, intra_usuario WHERE tecnico = id_intrauser AND progreso = 100 AND nick_intrauser = '$usertec'");
   $roweqcli = mysql_fetch_row($eqcli);

   $eqtaller = mysql_query("SELECT COUNT(*) FROM equipos_clientes, intra_usuario WHERE tecnico = id_intrauser AND progreso <> 100 AND nick_intrauser = '$usertec'");
   $rowtaller = mysql_fetch_row($eqtaller);

  echo '      <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-desktop fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">'.$roweqcli[0].'</div>
                                    <div>Equipos reparados</div>
                                </div>
                            </div>
                        </div>
                        <a href="eqreparados.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver detalle</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">'.$rowtaller[0].'</div>
                                    <div>Equipos en proceso</div>
                                </div>
                            </div>
                        </div>
                        <a href="eqcola.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver detalle</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>';
}

#Es el responsabel del registro
function elfue($culpa)
{
   $elfue = mysql_query("SELECT id_intrauser FROM intra_usuario, colavoradores WHERE nick_intrauser = '$culpa'") or die (mysql_error());
    $r = mysql_fetch_row($elfue);
    echo '<input type="hidden" name="respon" value="' . $r[0] . ' ">';
}

function EquiposPendientes($tecnico)
{
  $result = mysql_query("SELECT * FROM  v_eq_pendientes WHERE nick_intrauser = '$tecnico'") or die(mysql_error());
  echo '  <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Cod ID</th>
                <th>Marcar</th>
                <th>Model</th>
                <th>Tipo de equipo</th>
                <th>Problema</th>
                <th>Diagnostico</th>
                <th>Progreso</th>
                <th>Accion</th>

            </tr>
        </thead>
        <tbody>';
        while ($row = mysql_fetch_row($result)){

            echo '<tr>
                <td>'.$row[0].'</td>
                <td>'.$row[1].'</td>
                <td>'.$row[2].'</td>
                <td>'.$row[3].'</td>
                <td>'.$row[4].'</td>
                <td>'.$row[5].'</td>
                <td>'.$row[6].'</td>
                <td><a href="addcargo.php?var='.$row[0].'" class="btn btn-success btn-circle"><i class="fa fa-gears"></i></a></td>
            </tr>';
        }
        echo '  </tbody>
      </table>';
}

function EqParaCargo($equipo)
{
  $eqcargo = mysql_query("SELECT marca_eqclient, model_eqclient, progreso, problema_eqclient, diagnostico_eqclient, nom_client, apell_client, id_eqclient FROM equipos_clientes, Clientes WHERE id_eqclient = '$equipo' AND propietario_eqclient = id_client") or die(mysql_error());
  $roweqcargo = mysql_fetch_row($eqcargo);
  $eq = $roweqcargo[7];

echo '<div class="col-lg-6">
      <div class="panel panel-default">
          <div class="panel-heading">
              Datos del equipo y propietario
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
              <div class="table-responsive">
                  <table class="table">

                      <tbody>
                          <tr>
                              <td><b>Popietario: </b></td>
                              <td colspan="4">'.$roweqcargo[5].' '.$roweqcargo[6].'</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>

                          </tr>
                          <tr>
                              <td><b>Marca: </b></td>
                              <td>'.$roweqcargo[0].'</td>
                              <td><b>Modelo: </b></td>
                              <td>'.$roweqcargo[1].'</td>
                              <td><b>Progreso: </b></td>
                              <td>'.$roweqcargo[2].'%</td>
                          </tr>
                          <tr>
                              <td><b>Problema: </b></td>
                              <td>'.$roweqcargo[3].'</td>
                              <td><b>Diagnostico: </b></td>
                              <td>'.$roweqcargo[4].'</td>
                              <td></td>
                              <td></td>

                          </tr>
                          <tr>
                              <td colspan="2"><b>Siguiente nivel</b></td>
                              <td colspan="4"><a href="fine/nextnevel.php?next='.$roweqcargo[7].'" class="btn btn-default">Hacer avanzar</a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <!-- /.table-responsive -->
          </div></div>';

  $cargos = mysql_query("SELECT id_cargo, monto_cargo, descripcion_cargo, fecha_cargo FROM equipos_clientes, cargos_eqpaciente WHERE id_eqclient =  '$eq' AND cod_eqclient = id_eqclient AND saldado = 0") or die(mysql_error());

        echo '<div class="col-lg-13">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Cargos realizado al equipo
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                      <div class="table-responsive">
                          <table class="table">
                          <thead>
                              <tr>
                                  <th>Cod Cargo</th>
                                  <th>Monto</th>
                                  <th>Descripcion</th>
                                  <th>Fecha</th>
                              </tr>
                          </thead>
                              <tbody>';
                              $suma = 0;
          while ($rowcargos = mysql_fetch_row($cargos)){
            $suma += $rowcargos[1];
                                echo ' <tr>
                                      <td>'.$rowcargos[0].'</td>
                                      <td>$'.$rowcargos[1].'</td>
                                      <td>'.$rowcargos[2].'</td>
                                      <td>'.$rowcargos[3].'</td>
                                  </tr>';
                                }
            echo '<tr>
                                      <td><b>Total</b></td>
                                      <td><b>$'.$suma.'</b></td>
                                      <td></td>
                                      <td></td>
                                  </tr>';
            echo '</tbody>
              </table>
          </div>
        </div>';

}

function propietario($codigo)
{

  $propi = mysql_query("SELECT Id_client, nom_client, apell_client FROM v_propietario WHERE Id_client = $codigo");
  $fila = mysql_fetch_row($propi) or die(mysql_error());

  echo '<div class="form-group">
        <label for="disabledSelect">Propietario del equipo</label>
        <input class="form-control" id="disabledInput" type="text" name="propietario" placeholder="'.$fila[1].' '.$fila[2].'" disabled>
        </div>';
}

function CodIdIntra($codid)
{
  $result = mysql_query("SELECT * FROM v_codid_intra WHERE nick_intrauser = '$codid'") or die(mysql_error());
  $row = mysql_fetch_row($result);
  echo '<input type="hidden" name="yotec" value="' . $row[0] . ' ">';
}

function carteraclientes()
{
  $result = mysql_query("SELECT * FROM cartera_clientes") or die(mysql_error());
//se despliega el resultado
echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
       <tr>
           <th>Codigo</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Telefono</th>
           <th>Correo electronico</th>
           <th>Acción</th>
       </tr>
    </thead>
   <tbody>';
while ($row = mysql_fetch_row($result)){
    echo "<tr class='odd gradeX'>";
    echo "<td>cod-$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td>$row[4]</td>";
    echo '<td><div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Acción
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="nuevoeqclient.php?var='.$row[0].'">Agregar equipo</a>
                                        </li>
                                    </ul>
                                </div>
          </td>';
    echo "</tr>";

}
echo " </tbody> </table>";

}

function EqCola($data)
{
  $result = mysql_query("SELECT * FROM  v_eq_pendientes WHERE nick_intrauser = '$data'") or die(mysql_error());
//se despliega el resultado
echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
       <tr>
           <th>Codigo</th>
           <th>Marca</th>
           <th>Modelo</th>
           <th>Tipo</th>
           <th>Problema</th>
           <th>Diagnostico</th>
           <th>Progreso</th>
           <th>Acción</th>
       </tr>
    </thead>
   <tbody>';
while ($row = mysql_fetch_row($result)){
    echo "<tr class='odd gradeX'>";
    echo "<td>cod-$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td>$row[4]</td>";
    echo "<td>$row[5]</td>";
    echo "<td>$row[6]</td>";
    echo '<td><div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Acción
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="addcargo.php?var='.$row[0].'">Continuar proyecto</a>
                                        </li>
                                    </ul>
                                </div>
          </td>';
    echo "</tr>";

}
echo " </tbody> </table>";

}

function EquiposRepados($user)
{
    $yo = mysql_query("SELECT id_intrauser FROM intra_usuario, colavoradores WHERE nick_intrauser = '$user' AND id_colavor = cod_colavorador");
    $rowyo = mysql_fetch_row($yo);

    $result = mysql_query("SELECT * FROM v_eqcli_reparado WHERE tecnico = '$rowyo[0]'") or die(mysql_error());
//se despliega el resultado
echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
       <tr>
           <th>Cod ID</th>
           <th>Marca</th>
           <th>Modelo</th>
           <th>Tipo equipo</th>
           <th>Problema</th>
           <th>Diagnostico</th>
           <th>Progreso</th>
       </tr>
    </thead>
   <tbody>';
while ($row = mysql_fetch_row($result)){
    echo "<tr class='odd gradeX'>";
    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[4]</td>";
    echo "<td>$row[7]</td>";
    echo "<td>$row[8]</td>";
    echo "<td>$row[9] %</td>";
    echo "</tr>";

}
echo " </tbody> </table>";
}

function PerfilIntra($usernick)
{
  $propi = mysql_query("SELECT * FROM v_perfil_intra WHERE nick_intrauser = '$usernick'");
  $fila = mysql_fetch_row($propi) or die(mysql_error());
  if ($fila[3] == 1 && $fila[4] == 1) {
    $status = "Usuario activo";
    $nivelacc = "Nivel de acceso Root";
  }
  elseif ($fila[3] == 0 && $fila[4] == 0) {
    $status = "Usuario no activo";
    $nivelacc = "No tiene valor de acceso";
  }
  else {
    $status = "No esta definido";
    $nivelacc = "Valor de acceso no definido";
  }
  echo '<div class="row">

                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Datos personales
                        </div>
                        <div class="panel-body">
                            <p><strong>Tu nombre completo</strong></p>
                            <p><em>'.$fila[7].' '.$fila[8].'</em></p>
                             <p><strong>Tu correo electronico</strong></p>
                            <p><em>'.$fila[19].'</em></p>
                            <p><strong>Telefono y Celular</strong></p>
                            <p><em>'.$fila[9].' | '.$fila[10].'</em></p>
                            <p><strong>Fecha de nacimiento</strong></p>
                            <p><em>'.$fila[11].'</em></p>
                             <p><strong>DUI</strong></p>
                            <p><em>'.$fila[12].'</em></p>
                             <p><strong>ISSS</strong></p>
                            <p><em>'.$fila[13].'</em></p>
                            <p><strong>AFP</strong></p>
                            <p><em>'.$fila[14].'</em></p>
                              <p><strong>NIT</strong></p>
                            <p><em>'.$fila[15].'</em></p>
                             <p><strong>N° Licencia y tipo</strong></p>
                            <p><em> N°: '.$fila[16].', Tipo: '.$fila[17].'</em></p>
                            <p><strong>Direccion de domicilio</strong></p>
                            <p><em> '.$fila[18].'</em></p>
                            <br>
                           </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cuenta de usuario
                        </div>
                        <div class="panel-body">
                            <p><strong>Tu nombre de usuario </strong></p>
                            <p><em>'.$fila[1].'</em></p>
                            <p><strong>Estatus </strong></p>
                            <p><em>'.$status.'</em></p>
                            <p><strong>Nivel de acceso </strong></p>
                            <p><em>'.$nivelacc.'</em></p>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-outline btn-info">Cambiar foto de perfil</button>
                        </div>
                        <div class="panel-body">

                          <img src="led/user.png" alt="..." class="img-rounded">

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>';
}
?>
