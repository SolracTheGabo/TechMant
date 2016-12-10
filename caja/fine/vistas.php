<?php
#Extrae el nombre del colavorador con el nickname y comparamos el cod ID para confirmar
function session($user)
{
    $result = mysql_query("SELECT id_intrauser, nick_intrauser, nom_colaborador, apell_colavorador FROM intra_usuario, colavoradores WHERE nick_intrauser = '$user' AND id_colavor = cod_colavorador");
    $row = mysql_fetch_row($result);
    echo $row[2]." ".$row[3];
    echo '<input type="hidden" name="respon" value="' . $row[0] . ' ">';

}

function ListaTec()
{
    $result = mysql_query("SELECT * FROM v_lista_tec") or die(mysql_error());
          echo '<div class="form-grv_este_fueoup">
          <label>Asignar tecnico</label>
           <select name="tec" class="form-control">';
          while ($row = mysql_fetch_row($result)){
              echo "<option value=".$row[0].">".$row[1]."</option>";
          }
echo  "</select>
  </div><br />";
}

#Vista para el Dashboard
function ViewDash($usertec)
{

   $eqcli = mysql_query("SELECT * FROM v_count_eqlisto");
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
                                    <div>Equipos listos</div>
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
                                    <div>Ventas totales realizadas</div>
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
    echo '<input type="hidden" name="respon" value="'.$r[0] .'">';
}

function EquiposListos()
{  $result = mysql_query("SELECT * FROM  v_equipos_listos") or die(mysql_error());
  //se despliega el resultado
  echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th>Correo electronico</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Progreso</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>';

  while ($row = mysql_fetch_row($result)){

  echo '<tr class="odd gradeX">
        <td>'.$row[0].'</td>
        <td>'.$row[1].'</td>
        <td>'.$row[2].'</td>
        <td>'.$row[3].'</td>
        <td>'.$row[4].'</td>
        <td>'.$row[5].'</td>
        <td>'.$row[6].'</td>
        <td><div class="btn-group">
            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                Acción
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li><a href="cuenta.php?var='.$row[8].'">Cuenta del equipo</a>
                </li>
            </ul>
        </div>
      </td>
    </tr>';

  }
              echo' </tbody>
                  </table>
                  ';
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

function SumCuenta($equipo)
{
  $eqcargo = mysql_query("SELECT nom_client, apell_client, id_eqclient, tecnico, propietario_eqclient, id_eqclient FROM equipos_clientes, Clientes WHERE id_eqclient = '$equipo' AND propietario_eqclient = id_client") or die(mysql_error());
  $roweqcargo = mysql_fetch_row($eqcargo);
  $eq = $roweqcargo[2];

  echo '
                          <input type="hidden" name="accion" value="cuenta">
                          <input type="hidden" name="tec" value="'.$roweqcargo[3].'">
                          <input type="hidden" name="cliente" value="'.$roweqcargo[4].'">
                          <input type="hidden" name="eqclient" value="'.$roweqcargo[5].'">

                            <label>Efectivo</label>
                            <div class="form-group input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" name="efectivo" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>

                            <div class="form-group">
                                <label>Descuentos</label>
                                <label class="radio-inline">
                                    <input type="radio" name="descuento"  value="0" checked="">0%
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="descuento"  value="1">10%
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="descuento"  value="2">20%
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="descuento"  value="3">30%
                                </label>
                            </div>
                              <button type="submit" class="btn btn-default">Aceptar</button>
                              <a href="index.php" class="btn btn-default">Cancelar</a>


                      </div>';

$cargos = mysql_query("SELECT id_cargo, monto_cargo, descripcion_cargo, fecha_cargo FROM equipos_clientes, cargos_eqpaciente WHERE id_eqclient =  '$eq' AND cod_eqclient = id_eqclient AND saldado = 0") or die(mysql_error());
                    echo '<!-- /.col-lg-6 (nested) -->
                      <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Basic Table
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Monto</th>
                                                <th>Descripcion</th>
                                                <th>Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                        $suma = 0;
                    while ($rowcargos = mysql_fetch_row($cargos)){
                      $suma += $rowcargos[1];
                                      echo    ' <tr>
                                                <td>'.$rowcargos[0].'</td>
                                                <td>'.$rowcargos[1].'</td>
                                                <td>'.$rowcargos[2].'</td>
                                                <td>'.$rowcargos[3].'</td>
                                            </tr>';
                                      }
                                      echo    ' <tr>
                                                <td><h2><b>Total</b></h2></td>
                                                <td colspan="2"><h2><b>$ '.$suma.'</b></h2></td>
                                                <input type="hidden" name="monto" value="'.$suma.'">
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                      </form>
                      </div>
                      <!-- /.col-lg-6 (nested) -->
                  </div>
                  <!-- /.row (nested) -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>';
}

function Elpago($cod_venta)
{
  $eqcargo = mysql_query("SELECT * FROM v_venta WHERE id_venta = '$cod_venta'") or die(mysql_error());
  $roweqcargo = mysql_fetch_row($eqcargo);

  echo '<div class="panel-body">
      <div class="row">
          <div class="col-lg-6">
              <form role="form">

                  <h1>Efectivo</h1>
                  <h2>'.$roweqcargo[2].'</h2>

                  <h1>Monto</h1>
                  <h2>'.$roweqcargo[1].'</h2>

                  <h1>Descuento</h1>
                  <h2>'.$roweqcargo[5].'</h2>
              </form>
          </div>
          <!-- /.col-lg-6 (nested) -->
          <div class="col-lg-6">

            <h1>Total a pagar</h1>
            <h2>'.$roweqcargo[3].'</h2>

            <h1>Cambio</h1>
            <h2>'.$roweqcargo[4].'</h2>
            <br /><br />
            <button type="submit" class="btn btn-default">Submit Button</button>
            <button type="reset" class="btn btn-default">Reset Button</button>
          </div>
          <!-- /.col-lg-6 (nested) -->
      </div>
      <!-- /.row (nested) -->
  </div>
  <!-- /.panel-body -->';
}
?>
