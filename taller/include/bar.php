<?php
include 'include/link.php';
include 'fine/vistas.php';
session_start();
if(!isset($_SESSION['usuario']))
{
  header('Location: ../login1.html');
  exit();
}

function topBar()
{
	echo ' <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="perfil.php"><i class="fa fa-user fa-fw"></i> Perfil de usuario</a>
                        </li>
                        <li><a href="chapass.php?var='.$_SESSION['usuario'].'"><i class="fa fa-gear fa-fw"></i> Cambiar contraseña</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="led/logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->';
}

function Menus()
{
	echo ' <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Nuevo<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                        <li>
                            <a href="nuevo_cliente.php"><i class="fa fa-edit fa-fw"></i> Nuevo cliente</a>
                        </li>
                         <li>
                            <a href="listaclient.php"><i class="fa fa-edit fa-fw"></i> Nuevo equipo, mismo cliente</a>
                        </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Ver y buscar.<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="eqcola.php"><i class="fa fa-table fa-fw"></i> Equipos en cola</a>
                                </li>
                                <li>
                                    <a href="eqreparados.php"><i class="fa fa-table fa-fw"></i> Equipos reparados</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>';
}

?>
