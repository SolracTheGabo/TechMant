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
function Vieash()
{
   $eqcli = mysql_query("SELECT * FROM v_cout_eqcli");
   $roweqcli = mysql_fetch_row($eqcli);

   $eqtaller = mysql_query("SELECT * FROM v_cout_eqcli_taller");
   $rowtaller = mysql_fetch_row($eqtaller);

   $countcli = mysql_query("SELECT * FROM v_cout_client");
   $rowcountcli = mysql_fetch_row($countcli);

   $colav = mysql_query("SELECT * FROM v_cout_col");
   $rowcolav = mysql_fetch_row($colav);

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
                                    <div>Equipos registrados</div>
                                </div>
                            </div>
                        </div>
                        <a href="eqclist.php">
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
                                    <div>Equipos en taller</div>
                                </div>
                            </div>
                        </div>
                        <a href="eqclitaller.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver detalle</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">'.$rowcountcli[0].'</div>
                                    <div>Cliente registrados</div>
                                </div>
                            </div>
                        </div>
                        <a href="cartera_clientes.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver detalle</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-child fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">'.$rowcolav[0].'</div>
                                    <div>Colavoradores</div>
                                </div>
                            </div>
                        </div>
                        <a href="listcol.php">
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

#Areas registradas en el sistema
function ListaAreas()
{
    $result = mysql_query("SELECT * FROM areas_trabajo ") or die(mysql_error());
          echo '<div class="form-group">
          <label>Area a la que sera asignado</label>
           <select name="area" class="form-control">';
          while ($row = mysql_fetch_row($result)){
              echo "<option value=".$row[0].">".$row[1]."</option>";
          }
echo  "</select>
  </div>";
}

#Asignar tec a equipo cliente desde una lista
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
  </div>";
}

#Genero la cartera de clientes ingresados
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
                                        <li><a href="cuenta.php?var='.$row[0].'">Su cuenta</a>
                                        </li>
                                        <li><a href="nuevoeqclient.php?var='.$row[0].'">Agregar equipo</a>
                                        </li>
                                        <li><a href="chaclient.php?var='.$row[0].'">Actualizar informacion</a>
                                        </li>
                                        <li><a href="pclient.php?var='.$row[0].'">Ver sus equipos</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Ver perfil</a>
                                        </li>
                                    </ul>
                                </div>
          </td>';
    echo "</tr>";

}
echo " </tbody> </table>";

}

#Vista cartera de clientes
function propietario($codigo)
{

  $propi = mysql_query("SELECT Id_client, nom_client, apell_client FROM v_propietario WHERE Id_client = $codigo");
  $fila = mysql_fetch_row($propi) or die(mysql_error());

  echo '<div class="form-group">
        <label for="disabledSelect">Propietario del equipo</label>
        <input class="form-control" id="disabledInput" type="text" name="propietario" placeholder="'.$fila[1].' '.$fila[2].'" disabled>
        </div>';
}

function viewPclient($codcli)
{
  $result = mysql_query("SELECT * FROM v_compus WHERE propietario_eqclient = $codcli") or die(mysql_error());
//se despliega el resultado
echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
       <tr>
           <th>Codigo</th>
           <th>Marca</th>
           <th>Modelo</th>
           <th>Tipo</th>
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
    echo '<td><div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Acción
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="cuenta.php?var='.$row[0].'">Ver detalle</a>
                                        </li>
                                        <li><a href="nuevoeqclient.php?var='.$row[0].'">Cambiar datos</a>
                                        </li>
                                        <li><a href="pclient.php?var='.$row[0].'">Ver sus estado</a>
                                        </li>
                                    </ul>
                                </div></td>';
    echo "</tr>";
    $client = $row[4];
}
echo " </tbody> </table>";
echo '  <div class="well">
      <h4>Registrar otro equipo a este cliente</h4>
    <a class="btn btn-default btn-lg btn-block" href="nuevoeqclient.php?var='.$client.'">Agregar otro equipo</a>
  </div>';

}

#Listado de colavoradores (Empleados)
function Listcol()
{
    $result = mysql_query("SELECT * FROM v_list_col") or die(mysql_error());
//se despliega el resultado
echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
       <tr>
          <th>Codigo ID</th>
           <th>Nombres</th>
           <th>Apellidos</th>
           <th>Telefono</th>
           <th>Celular</th>
           <th>Correo electronico</th>
           <th>Area de trabajo</th>
           <th>Acción</th>
       </tr>
    </thead>
   <tbody>';
while ($row = mysql_fetch_row($result)){
    echo "<tr class='odd gradeX'>";
    echo "<td>$row[0]</td>";
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
                                       <li><a href="perfilcol.php?var='.$row[0].'">Ver perfil</a>
                                        </li>
                                        <li><a href="updatecol.php?var='.$row[0].'">Actualizar</a>
                                        </li>

                                    </ul>
                                </div>
          </td>';
    echo "</tr>";

}
echo " </tbody> </table>";
}

function eqclist()
{
  $result = mysql_query("SELECT * FROM v_eqclist") or die(mysql_error());
//se despliega el resultado
echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
       <tr>
           <th>Cod ID</th>
           <th>Marca</th>
           <th>Modelo</th>
           <th>Tipo de equipo</th>
           <th>Propietario</th>
           <th>Apellidos</th>
           <th>Acción</th>
       </tr>
    </thead>
   <tbody>';
while ($row = mysql_fetch_row($result)){
    echo "<tr class='odd gradeX'>";
    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td>$row[4]</td>";
    echo "<td>$row[5]</td>";
    echo '<td><div class="btn-group">
              <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                  Acción
                  <span class="caret"></span>
              </button>
              <ul class="dropdown-menu pull-right" role="menu">
                 <li><a href="#">Ver detalle</a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="nuevoeqclient.php?var='.$row[0].'">Cambiar datos</a>
                  </li>
                </ul>
            </div>
          </td>';
    echo "</tr>";

}
echo " </tbody> </table>";
}

function ListAreas()
{
  $result = mysql_query("SELECT * FROM v_areas") or die(mysql_error());
//se despliega el resultado
echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
       <tr>
           <th>Cod ID</th>
           <th>Nombre del area</th>
           <th>Acción</th>
       </tr>
    </thead>
   <tbody>';
while ($row = mysql_fetch_row($result)){
    echo "<tr class='odd gradeX'>";
    echo "<td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo '<td><div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Acción
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                       <li><a href="#">Ver detalle</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="nuevoeqclient.php?var='.$row[0].'">Cambiar datos</a>
                                        </li>

                                    </ul>
                                </div>
          </td>';
    echo "</tr>";

}
echo " </tbody> </table>";
}

function FormUpdateClient($cod)
{
  $propi = mysql_query("SELECT * FROM v_clientes WHERE Id_client = $cod");
  $fila = mysql_fetch_row($propi) or die(mysql_error());

echo '<div class="form-group">
    <label>Nombre completo</label>
    <input class="form-control" type="text" name="nom" value="'.$fila[1].'">
</div>
 <div class="form-group">
    <label>Apellidos completos</label>
    <input class="form-control" type="text" name="apell" value="'.$fila[2].'">
</div>


<button type="submit" class="btn btn-default">Guardar</button>
<button type="reset" class="btn btn-default">Reiniciar formulario</button>

</div>
<!-- /.col-lg-6 (nested) -->
<div class="col-lg-6">

<div class="form-group">
    <label>Numero de telefono</label>
    <input class="form-control" type="text" name="num" value="'.$fila[3].'">
</div>

<label>Correo Electronico</label>
<div class="form-group input-group">
    <span class="input-group-addon">@</span>
    <input type="text" class="form-control" name="email" value="'.$fila[4].'">
</div>';
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

function FromUpdateCol($idcode)
{
  $propi = mysql_query("SELECT * FROM v_all_col WHERE id_colavor = '$idcode'");
  $fila = mysql_fetch_row($propi) or die(mysql_error());

  echo ' <div class="form-group">
                     <label>Nombre completo</label>
                        <input type="text" name="nomcol" value="'.$fila[1].'" class="form-control">
                     </div>
                     <div class="form-group">
                         <label>Apellidos completos</label>
                         <input type="text" name="apellcol" value="'.$fila[2].'" class="form-control">
                     </div> 
                     <div class="form-group">
                         <label>Telefono recidencial</label>
                         <input type="text" name="tellcol" class="form-control" value="'.$fila[3].'">
                     </div> 
                     <div class="form-group">
                         <label>Telefono celular</label>
                         <input type="text" name="cellcol" class="form-control" value="'.$fila[4].'">
                     </div>
                     <div class="form-group">
                     <label>Fecha de nacimiento</label>
                     <input type="date" class="form-control" name="natalicio" step="1" min="1950-01-01" max="2040-01-01" value="'.$fila[5].'">
                     </div>
                     '.ListaAreas().'
                     <div class="form-group">
                         <label>DUI</label>
                         <input type="text" name="dui" class="form-control" value="'.$fila[6].'">
                     </div>                                    
                     <button type="submit" class="btn btn-default">Guardar cambios</button>
                     <button type="reset" class="btn btn-default">Restablecer formulario</button>
             </div>
             <!-- /.col-lg-6 (nested) -->
             <div class="col-lg-6">
                         <div class="form-group">
                         <label>ISSS</label>
                         <input type="text" name="issscol" class="form-control" value="'.$fila[7].'">
                     </div>
                            <div class="form-group">
                         <label>AFP</label>
                         <input type="text" name="afpcol" class="form-control" value="'.$fila[8].'">
                     </div>
                     <div class="form-group">
                         <label>NIT</label>
                         <input type="text" name="nitcol" class="form-control" value="'.$fila[9].'">
                     </div>
                      <div class="form-group">
                         <label>Licencia</label>
                         <input type="text" name="licenciacol" class="form-control" value="'.$fila[10].'">
                     </div>
                      <div class="form-group">
                     <label>Tipo de licencia</label>
                      <select name="tlicenciacol" class="form-control">
                          <option value="Libiana">Libiana</option>
                         <option value="Pesada">Pesada</option>
                         <option value="Moto">Moto</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <label>Direccion de recidencia</label>
                         <input type="text" name="direccol" class="form-control" value="'.$fila[12].'">
                     </div>
                     <div class="form-group">
                         <label>Correo electronico</label>
                         <input type="text" name="emailcol" class="form-control" value="'.$fila[13].'">
                     </div>';
}

function PerfilCol($var)
{
  $propi = mysql_query("SELECT * FROM v_perfil_intra WHERE id_intrauser = '$var'");
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

function EquiposTaller()
{
    $result = mysql_query("SELECT * FROM v_eqcli_taller") or die(mysql_error());
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
           <th>Accion</th>
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

    echo '<td><div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Acción
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                       <li><a href="#">Ver detalle</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="nuevoeqclient.php?var='.$row[0].'">Cambiar datos</a>
                                        </li>

                                    </ul>
                                </div>
          </td>';
    echo "</tr>";

}
echo " </tbody> </table>";

}

function EquiposRepados()
{
    $result = mysql_query("SELECT * FROM v_eqcli_reparado") or die(mysql_error());
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
           <th>Accion</th>
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

    echo '<td><div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Acción
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                       <li><a href="#">Ver detalle</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="nuevoeqclient.php?var='.$row[0].'">Cambiar datos</a>
                                        </li>

                                    </ul>
                                </div>
          </td>';
    echo "</tr>";

}
echo " </tbody> </table>";

}
?>
