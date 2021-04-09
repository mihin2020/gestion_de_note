<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href=" " class="nav-link">Acceuil</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
                    </div>
                </div>
            </form>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-info elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link text-center">
                <img src="dist/img/logo.png" alt="Logo" width="75px" height="75px">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/avatar.svg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <h5 class="d-block ml-4 text-light">Directeur </h5>
                        <!-- recuperation du nom  à l'inscription et affichage-->
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Ajouter
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{asset('ajout_prof')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Un professeur</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('ajout_mat')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Une matière</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Liste des éleves
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{asset('data_6eme')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>afficher 6eme</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('data_5eme')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>afficher 5eme</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="#">Accueil</a>
                                </li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">

            @yield('contenu')
             
            </section>

                    <footer class=" ">

                    </footer>


                    <!-- jQuery -->
                    <script src="plugins/jquery/jquery.min.js "></script>
                    <!-- jQuery UI 1.11.4 -->
                    <script src="plugins/jquery-ui/jquery-ui.min.js "></script>
                    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                    <script>
                        $.widget.bridge('uibutton', $.ui.button)
                    </script>
                    <!-- Bootstrap 4 -->
                    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js "></script>
                    <!-- ChartJS -->
                    <script src="plugins/chart.js/Chart.min.js "></script>
                    <!-- Sparkline -->
                    <script src="plugins/sparklines/sparkline.js "></script>
                    <!-- JQVMap -->
                    <script src="plugins/jqvmap/jquery.vmap.min.js "></script>
                    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js "></script>
                    <!-- jQuery Knob Chart -->
                    <script src="plugins/jquery-knob/jquery.knob.min.js "></script>
                    <!-- daterangepicker -->
                    <script src="plugins/moment/moment.min.js "></script>
                    <script src="plugins/daterangepicker/daterangepicker.js "></script>
                    <!-- Tempusdominus Bootstrap 4 -->
                    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js "></script>
                    <!-- Summernote -->
                    <script src="plugins/summernote/summernote-bs4.min.js "></script>
                    <!-- overlayScrollbars -->
                    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js "></script>
                    <!-- AdminLTE App -->
                    <script src="dist/js/adminlte.js "></script>
                    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                    <script src="dist/js/pages/dashboard.js "></script>
                    <!-- AdminLTE for demo purposes -->
                    <script src="dist/js/demo.js "></script>

                    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>


</html>