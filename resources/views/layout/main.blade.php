
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
   <!-- daterange picker -->
   <link rel="stylesheet" href="{{ asset('assets') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('assets') }}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
 @include('layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  
    <!-- /.content-header -->

    <!-- Main content -->
  @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- jquery-validation -->
<script src="{{ asset('assets') }}/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{ asset('assets') }}/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets') }}/dist/js/demo.js"></script>
<!-- date-range-picker -->
<script src="{{ asset('assets') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('assets') }}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  
<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('assets') }}/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('assets') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ asset('assets') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('assets') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('assets') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('assets') }}/plugins/chart.js/Chart.min.js"></script>
<!-- DataTables -->
<script src="{{ asset('assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/js/jszip.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/js/buttons.html5.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/js/buttons.print.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatable/responsive.bootstrap5.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Select2 -->
<script src="{{ asset('assets') }}/plugins/select2/js/select2.full.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="{{ asset('assets') }}/dist/js/pages/dashboard2.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('assets') }}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>


</body>
</html>
