<!DOCTYPE html>
<html>
<head>
  @include('partition.header')
   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav>
    @include('partition.nav')
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside>
    @include('partition.aside')
    
  </aside>

  <!-- Content Wrapper. Contains page content -->
 <!--  <div>
    @include('partition.conteneur')
  </div> -->
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('public/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('public/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('public/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('public/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('public/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/dist/js/demo.js')}}"></script>
<script src="{{ asset('public/js/oneui.app.js') }}"></script>
<script src="app.js" type="text/javascript"></script>
@include('partition.script')
<main id="main-container">
            @yield('content')
            <script src="{{asset('//code.jquery.com/jquery.js')}}"></script>
            
        </main>
        <!-- END Main Container -->


    </div>
    <!-- END Page Container -->

    <!-- OneUI Core JS -->

    <script src="{{ asset('js/oneui.app.js') }}"></script>
     
     <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="http://adminlte.io">Convention Nationale Etat Employeur</a>.</strong>

    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>
  <!--  -->
  <script src="//code.jquery.com/jquery.js"></script>
   @include('flashy::message')
   <!-- DataTables -->
   <script src="{{asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
   <script>
     $(function () {
       $('#example1').DataTable()
       $('#example2').DataTable({
         'paging'      : false,
         'lengthChange': false,
         'searching'   : true,
         'ordering'    : false,
         'info'        : true,
         'autoWidth'   : false
       })
     })
   </script>
</body>
</html>
