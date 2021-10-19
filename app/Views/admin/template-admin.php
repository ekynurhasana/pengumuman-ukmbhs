<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | <?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>/admin/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('/Bahasa'); ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/logout'); ?>" role="button" style="font-weight: bold; color: #ff0000;">Logout
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="<?= base_url('/'); ?>/img/logo-ukm.png" alt="Logo UKM" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold">UKM Bahasa PNUP</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('/'); ?>/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Panitia Oprec Learning</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('/Bahasa'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Home</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('/Bahasa/peserta'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Peserta</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('/Bahasa/nilai'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Nilai Peserta</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('/Bahasa/kelulusan'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Kelulusan Peserta</p>
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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?= $title; ?></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('/Bahasa'); ?>">Home</a></li>
                                <li class="breadcrumb-item active"><?= $title; ?></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <?= $this->renderSection('content'); ?>

        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2021 <a href="ukmbahasa.poliupg.ac.id">UKM Bahasa PNUP</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('/'); ?>/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('/'); ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('/'); ?>/admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('/'); ?>/admin/dist/js/demo.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('/'); ?>/admin/plugins/chart.js/Chart.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('/'); ?>/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('/'); ?>/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('/'); ?>/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('/'); ?>/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('/'); ?>/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('/'); ?>/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('/'); ?>/admin/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('/'); ?>/admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('/'); ?>/admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('/'); ?>/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('/'); ?>/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('/'); ?>/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- InputMask -->
    <script src="<?= base_url('/'); ?>/admin/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url('/'); ?>/admin/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url('/'); ?>/admin/plugins/sweetalert2/sweetalert2.min.js"></script>

    <?= $this->renderSection('script'); ?>

    <script>
        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })
        $('#datemask3').inputmask('yyyy-mm-dd', {
            'placeholder': 'yyyy-mm-dd'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>