<!DOCTYPE html>
<html lang="en" style="height: auto;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
 
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
    @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style>
    {{-- Ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    {{-- Auto Selected Department Division Position Using Ajax --}}
    <script>
        $(document).ready(function(){
            $('#departs').change(function(){
                let id = $(this).val();
                
                $.ajax({
                    type: "get",
                    url: "/getDivs/"+id,
                    dataType: "json",
                    success: function(data){
                        // console.log(data);
                        $('#divs').html(data);
                    },
                    error: function(error){
                        console.log(error);
                    }
                });
            });
            // $('#divs').change(function(){
            //     let id = $(this).val();
                
            //     $.ajax({
            //         type: "get",
            //         url: "/getPos/"+id,
            //         dataType: "json",
            //         success: function(data){
            //             // console.log(data);
            //             $('#pos').html(data);
            //         },
            //         error: function(error){
            //             console.log(error);
            //         }
            //     })
            // });
        });
    </script>
</head>
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
                <span class="brand-text font-weight-light">SPK Career Network</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('assets/bootstrap/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item menu-is-opening menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-layer-group"></i>
                              <p>
                                Management
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: block;">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link {{ ($active === "User") ? 'active' : ''  }}">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>
                                            Data User
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('position') }}" class="nav-link {{ ($active === "Position") ? 'active' : ''  }}">
                                        <i class="nav-icon fas fa-sitemap"></i>
                                        <p>
                                            Data Position
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link {{ ($active === "Division") ? 'active' : ''  }}">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            Data Division
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link {{ ($active === "Department") ? 'active' : ''  }}">
                                        <i class="nav-icon fas fa-building"></i>
                                        <p>
                                            Data Department
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">ASSESMENT</li>
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

        @yield('main')

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright © 2022 <a href="https://www.linkedin.com/in/andreasprasetya/" target="blank">Andreas Prasetya</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block"><b>Version</b> 1.0</div>
        </footer>
        <div id="sidebar-overlay"></div>
    </div>
    <!-- ./wrapper -->

    @yield('modal')

    <!-- REQUIRED SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="{{ asset('assets/bootstrap/plugins/jquery/jquery.min.js')}}"></script>
    {{-- <!-- Bootstrap -->
    <script src="{{ asset('assets/bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
    <!-- AdminLTE -->
    <script src="{{ asset('assets/bootstrap/dist/js/adminlte.js')}}"></script>
    <!-- Bootstrap 4 -->
    {{-- <script src="{{ asset('assets/bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
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
        $("#table1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#table1_wrapper .col-md-6:eq(0)');

    });
    </script>
</body>
</html>