<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Icon Gambar -->
<link rel="icon" type="image/png" href="{{ asset('user/images/icons/icon.png') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{-- cara memakai asset --}}
<link rel="stylesheet" href="{{asset('/plugins/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
<!-- Google Font: Poppins -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700" rel="stylesheet">
<style>
    .brand-text {
        font-family: 'Poppins', sans-serif; /* Mengganti font menjadi Poppins */
        color: white;
        font-weight: bold; /* Sesuaikan dengan kebutuhan */
    }
</style>
@yield('header')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
<!-- Navbar -->
@include('layout.include.navbar')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-blue elevation-4" style="background: #800080">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link" style="pointer-events: none;">
    <img src="../../dist/img/AdminLTELogo.png"
 alt="AdminLTE Logo"
 class="brand-image"
 style="opacity: .8; box-shadow: none;">
     <span class="brand-text font-weight-semibold garamond-text">Admin</span>
    </a>
    <div class="sidebar">
    <!-- Sidebar -->
    @include('layout.include.sidebar')
    <!-- /.sidebar -->
    </div>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            @yield('title')
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-body">
        {{-- masukan contect disini --}}
        @yield('content')
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/dist/js/demo.js') }}"></script>
@yield('footer');
</body>
</html>
