<?php include 'include/bar.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   <?php topBar(); ?>

        <?php Menus(); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nuevo colavorador</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Datos pesonales.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form role="form" action="fine/save.php" method="POST">
                                    <input type="hidden" name="accion" value="col">
                                    <?php elfue($_SESSION['usuario']); ?>

                                        <div class="form-group">
                                            <label>Nombre completo</label>
                                            <input type="text" name="nomcol" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Apellidos completos</label>
                                            <input type="text" name="apellcol" class="form-control">

                                        </div> 
                                        <div class="form-group">
                                            <label>Telefono recidencial</label>
                                            <input type="text" name="tellcol" class="form-control" placeholder="Ingresa el numero aqui">
                                        </div> 
                                        <div class="form-group">
                                            <label>Telefono celular</label>
                                            <input type="text" name="cellcol" class="form-control" placeholder="Ingresa el numero aqui">
                                        </div>

                                        <div class="form-group">
                                        <label>Fecha de nacimiento</label>
                                        <input type="date" class="form-control" name="natalicio" step="1" min="1950-01-01" max="2040-01-01" value="<?php echo date("Y-m-d");?>">
                                        </div>

                                        <?php ListaAreas(); ?>

                                        <div class="form-group">
                                            <label>DUI</label>
                                            <input type="text" name="dui" class="form-control" placeholder="Ingresa el numero aqui">
                                        </div>                                    
                                        
                                        <button type="submit" class="btn btn-default">Guardar</button>
                                        <button type="reset" class="btn btn-default">Restablecer formulario</button>
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                   
                                   
                                            <div class="form-group">
                                            <label>ISSS</label>
                                            <input type="text" name="issscol" class="form-control" placeholder="Ingresa el numero aqui">
                                        </div>
                                              <div class="form-group">
                                            <label>AFP</label>
                                            <input type="text" name="afpcol" class="form-control" placeholder="Ingresa el numero aqui">
                                        </div>
                                        <div class="form-group">
                                            <label>NIT</label>
                                            <input type="text" name="nitcol" class="form-control" placeholder="Ingresa el numero aqui">
                                        </div>
                                         <div class="form-group">
                                            <label>Licencia</label>
                                            <input type="text" name="licenciacol" class="form-control" placeholder="Ingresa el numero aqui">
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
                                            <input type="text" name="direccol" class="form-control" placeholder="Ingresa el numero aqui">
                                        </div>
                                        <div class="form-group">
                                            <label>Correo electronico</label>
                                            <input type="text" name="emailcol" class="form-control" placeholder="Ingresa el numero aqui">
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
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
