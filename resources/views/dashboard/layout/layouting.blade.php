<!DOCTYPE html>
<html lang="en" style="height: auto;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
 
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/adminlte.min.css')}}">
    <style type="text/css">
    /* Chart.js */
    @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
  <!--
  `body` tag options:
  
    Apply one or more of the following classes to to the body tag
    to get the desired effect
  
    * sidebar-collapse
    * sidebar-mini
  -->
<body class="sidebar-mini" style="height: auto;">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form action="logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link btn">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-light">HRD Division</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('assets/bootstrap/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Data User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-list-ul"></i>
                                <p>
                                    Data Kriteria
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>
                                    Data Penilaian
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-clipboard-check"></i>
                                <p>
                                    Hasil Penilaian
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 1313px;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard v3</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v3</li>
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
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            {{-- Data Table --}}
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Tabel Data User</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td>4</td>
                                                <td>X</td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.0</td>
                                                <td>Win 95+</td>
                                                <td>5</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.5</td>
                                                <td>Win 95+</td>
                                                <td>5.5</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet Explorer 6</td>
                                                <td>Win 98+</td>
                                                <td>6</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet Explorer 7</td>
                                                <td>Win XP SP2+</td>
                                                <td>7</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>AOL browser (AOL desktop)</td>
                                                <td>Win XP</td>
                                                <td>6</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Firefox 1.0</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.7</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Firefox 1.5</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Firefox 2.0</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Firefox 3.0</td>
                                                <td>Win 2k+ / OSX.3+</td>
                                                <td>1.9</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Camino 1.0</td>
                                                <td>OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Camino 1.5</td>
                                                <td>OSX.3+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Netscape 7.2</td>
                                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                <td>1.7</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Netscape Browser 8</td>
                                                <td>Win 98SE+</td>
                                                <td>1.7</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Netscape Navigator 9</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.0</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.1</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1.1</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.2</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1.2</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.3</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1.3</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.4</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1.4</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.5</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1.5</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.6</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1.6</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.7</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td>1.7</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.8</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Seamonkey 1.1</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Epiphany 2.20</td>
                                                <td>Gnome</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>Safari 1.2</td>
                                                <td>OSX.3</td>
                                                <td>125.5</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>Safari 1.3</td>
                                                <td>OSX.3</td>
                                                <td>312.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td>419.3</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>Safari 3.0</td>
                                                <td>OSX.4+</td>
                                                <td>522.1</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>OmniWeb 5.5</td>
                                                <td>OSX.4+</td>
                                                <td>420</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>iPod Touch / iPhone</td>
                                                <td>iPod</td>
                                                <td>420.1</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>S60</td>
                                                <td>S60</td>
                                                <td>413</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 7.0</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 7.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 8.0</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 8.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 9.0</td>
                                                <td>Win 95+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 9.2</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 9.5</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera for Wii</td>
                                                <td>Wii</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Nokia N800</td>
                                                <td>N800</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Nintendo DS browser</td>
                                                <td>Nintendo DS</td>
                                                <td>8.5</td>
                                                <td>C/A<sup>1</sup></td>
                                            </tr>
                                            <tr>
                                                <td>KHTML</td>
                                                <td>Konqureror 3.1</td>
                                                <td>KDE 3.1</td>
                                                <td>3.1</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>KHTML</td>
                                                <td>Konqureror 3.3</td>
                                                <td>KDE 3.3</td>
                                                <td>3.3</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>KHTML</td>
                                                <td>Konqureror 3.5</td>
                                                <td>KDE 3.5</td>
                                                <td>3.5</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Tasman</td>
                                                <td>Internet Explorer 4.5</td>
                                                <td>Mac OS 8-9</td>
                                                <td>-</td>
                                                <td>X</td>
                                            </tr>
                                            <tr>
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.1</td>
                                                <td>Mac OS 7.6-9</td>
                                                <td>1</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.2</td>
                                                <td>Mac OS 8-X</td>
                                                <td>1</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>NetFront 3.1</td>
                                                <td>Embedded devices</td>
                                                <td>-</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>NetFront 3.4</td>
                                                <td>Embedded devices</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>Dillo 0.8</td>
                                                <td>Embedded devices</td>
                                                <td>-</td>
                                                <td>X</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>Links</td>
                                                <td>Text only</td>
                                                <td>-</td>
                                                <td>X</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>Lynx</td>
                                                <td>Text only</td>
                                                <td>-</td>
                                                <td>X</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>IE Mobile</td>
                                                <td>Windows Mobile 6</td>
                                                <td>-</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>PSP browser</td>
                                                <td>PSP</td>
                                                <td>-</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>Other browsers</td>
                                                <td>All others</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>U</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright © 2022 <a href="https://www.linkedin.com/in/andreasprasetya/" target="blank">Andreas Prasetya</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block"><b>Version</b> 1.0</div>
        </footer>
        <div id="sidebar-overlay"></div>
    </div>
    <!-- ./wrapper -->

  
  <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('assets/bootstrap/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE -->
    <script src="{{ asset('assets/bootstrap/dist/js/adminlte.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/bootstrap/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Page specific script -->
    <script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    </script>
</body>
</html>