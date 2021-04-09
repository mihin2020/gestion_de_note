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
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
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
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <h5 class="d-block text-light">Professeur</h5>
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
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                            </ul>
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
                                    <a href="pages/forms/ajout_eleve.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Un Elève</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/ajout_mat.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Une matière</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/ajout_note.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Une note</p>
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
                                    <a href="pages/tables/data_6eme.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>afficher 6eme</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/data_5eme.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>afficher 5eme</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Résultats
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/resultats/resultat_6eme.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Resultat 6eme</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/resultats/resultat_5eme.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Résultat 5eme</p>
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
                                <li class="breadcrumb-item active">Dashboard v1</li>
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
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->




                    <div class="row ">
                        <div class="col-12">
                            <div class="card card-info ">
                                <div class="card-header ">
                                    <h3 class="card-title">Paramétrage</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ANNEE</th>
                                                <th class="text-center">SEMESTRE</th>
                                                <th class="text-center">CLASSE TENUE</th>
                                                <th class="text-center">OPERATIONS</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>183</td>
                                                <td class="text-center">John Doe</td>
                                                <td class="text-center">11-7-2014</td>
                                                <td class="text-center">
                                                    <button class="btn btn-warning  " type=" submit ">modifier</button>
                                                    <button class="btn btn-danger " type=" submit ">supprimer</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>

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
</body>

</html>