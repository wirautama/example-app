
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> {{config('app.name')}} | @yield('title')  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('template/') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/') }}/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('template/') }}/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('template/') }}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('template/') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/') }}/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="{{ asset('template/') }}/bower_components/select2/dist/css/select2.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('template/') }}/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  
  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Maha</b>siswa</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="/"><i class="fa fa-home"></i> Dashboard</a>
          </li>
          @auth
          <li class="dropdown">
            {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>  {{ auth()->user()->name }}<span class="caret"></span></a>
             --}}
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              {{-- <img src="{{ Storage::url(auth()->user()->image) }}" class="mx-auto d-block" weight="30" height="30"> --}}
              <i class="fa fa-user"></i> 
              <span class="hidden-xs">user</span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="/profile"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="" data-toggle="modal" data-target="#logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
            </ul>
          </li>
          @endauth
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          {{-- <img src="{{asset('img')}}/default.svg" class="mx-auto d-block" alt="User Image"> --}}
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      @include('templates.navbar')
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      {{-- @if(session()->has('success'))
    <div class="row">
      <div class="col-lg-10 col-xs-4">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Sukses!!</h4>
        {{ session('success') }} <b>{{ auth()->user()->name }}</b>, Anda Login sebagai <b>{{auth()->user()->level}}</b>.
      </div>
    </div>
    </div>
      @endif --}}

      <h1>
        @yield('title')
        <small>semuanya di mulai disini</small>
      </h1>
      @include('templates.breadcumbs')
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      @yield('content')
        <!-- /.box-body -->
  
        <!-- /.box-footer-->
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1.0
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <a href="https://github.com/wirautama">Aditya Wira Utama</a>.</strong> All rights
    reserved.
  </footer>

{{-- Logout Modal --}}
  <div class="modal modal-primary fade" id="logout">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Hi </h4>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin Logout??</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Mungkin Nanti Saja</button>
          <a href="" type="button" class="btn btn-outline">Ya</a>
        </div>
      </div>
    </div>
</div>
@include('sweetalert::alert')

{{-- Logout Modal --}}
  <!-- Control Sidebar -->
  <!-- jQuery 3 -->
  <!-- Bootstrap 3.3.7 -->
  <script src="{{ asset('template') }}/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('template/') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="{{ asset('template/') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="{{ asset('template/') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="{{ asset('template/') }}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="{{ asset('template/') }}/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('template/') }}/dist/js/adminlte.min.js"></script>
  <script src="{{ asset('template/') }}/bower_components/chart.js/Chart.js"></script>
  <script src="{{ asset('template/') }}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('template/') }}/dist/js/demo.js"></script>
  <script src="{{ asset('template/') }}/bower_components/chart.js/Chart.js"></script>
  @stack('javascript')
  

<!-- PACE -->



<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
<script>
   $('#datepicker').datepicker({
      autoclose: true
    })
</script>


</body>
</html>
