<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DesempleoCOVID</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Desempleo<sup>COVID</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>/admin/index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interfaz
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>/admin/graficas">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Gráficas</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tablas</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/lista">Listado Completo</a>
                        <h6 class="collapse-header">Comunas</h6>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna1">Comuna 1</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna2">Comuna 2</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna3">Comuna 3</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna4">Comuna 4</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna5">Comuna 5</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna6">Comuna 6</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna7">Comuna 7</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna8">Comuna 8</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna9">Comuna 9</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna10">Comuna 10</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna11">Comuna 11</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna12">Comuna 12</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna13">Comuna 13</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna14">Comuna 14</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna15">Comuna 15</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>/admin/comuna16">Comuna 16</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">


            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <ul class="navbar-nav ml-auto">
                        
                    <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Usuario de la Alcaldia</span>
                <img class="img-profile rounded-circle" src="img/icono.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> 
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>
              </div>
            </li>
                    </ul>


                </nav>
                <!-- End of Topbar -->