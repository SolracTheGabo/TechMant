<?php include 'include/bar.php';
$codigo = $_GET['var'];
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
</head>

<body>

    <div id="wrapper">
 <?php topBar(); ?>

        <?php Menus(); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registar un equipo cliente nuevo. </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Recolector de datos del equipo cliente
                        </div>
                        <div class="panel-body">
                            <div class="row">
                               <div class="col-lg-6">
                                    <form role="form" action="fine/save.php" method="POST">
                                    <input type="hidden" name="accion" value="neqcli">
                                    <input type="hidden" name="dueno" value="<?php echo $codigo; ?>" >
                                    <?php elfue($_SESSION['usuario']); ?>

                                        <?php propietario($codigo); ?>

                                        <div class="form-group">
                                            <label>Marca</label>
                                            <input class="form-control" type="text" name="marca" placeholder="Toshiba, Dell, Hp, IMB">
                                        </div>
                                         <div class="form-group">
                                            <label>Modelo</label>
                                            <input class="form-control" type="text" name="modelo" >
                                        </div>
                                        <div class="form-group">
                                            <label>Numero serial</label>
                                            <input class="form-control" type="text" name="sn">
                                        </div>
                                         <div class="form-group">
                                            <label>Tipo equipo</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="tipo" id="optionsRadios1" value="Escritorio" checked>Escritorio
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="tipo" id="optionsRadios2" value="Laptop">Laptop
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="tipo" id="optionsRadios3" value="Tablet">Tablet
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-default">Guardar</button>
                                        <button type="reset" class="btn btn-default">Reiniciar formulario</button>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                <?php ListaTec(); ?>
                                 <div class="form-group">
                                            <label>Detalle de hardware del equipo</label>
                                            <textarea class="form-control" name="hardware" rows="3"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Observaciones del equipo</label>
                                            <textarea class="form-control" name="observa" rows="3"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Problema descripo por el cliente</label>
                                            <textarea class="form-control" name="problema" rows="3"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Diagnostico del problema</label>
                                            <textarea class="form-control" name="diagnos" rows="3"></textarea>
                                        </div>

                                </div>
                                </form>
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
