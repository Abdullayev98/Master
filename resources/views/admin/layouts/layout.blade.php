<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('admin/css/admin.css')}}">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
   Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="<!--nav-item">
        <a class="nav-link" data-widget="pushmenu" data-enable-remember="true" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('admin.index')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" target="_blank" class="brand-link">
      <img src="{{asset('admin/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Usta pedagog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
            <li class="nav-item">
                <a href="{{route('admin.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                  Boblar
                  <i class="right fas fa-angle-left"></i>
              </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('bobs.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Boblar ro'yhati</p>
                  </a>
                 </li>
                <li class="nav-item">
                  <a href="{{route('bobs.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bob yaratish</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                  Darslar
                  <i class="right fas fa-angle-left"></i>
              </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('lessons.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Darslar ro'yhati</p>
                  </a>
                 </li>
                <li class="nav-item">
                  <a href="{{route('lessons.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dars yaratish</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
              <i class="nav-icon far fa-file"></i>
              <p>
                  O'quv manbalar (pdf)
                  <i class="right fas fa-angle-left"></i>
              </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('pdfs.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>O'quv manbalar ro'yhati</p>
                  </a>
                 </li>
                <li class="nav-item">
                  <a href="{{route('pdfs.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>O'quv manba yaratish</p>
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
    @include('admin.layouts.fullerrors')
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>The best</b>
    </div>
    <strong><i class="fas fa-telegram">t.me:  </i> <a href="https://t.me/laraveller">Abdullayev</a>   </strong>Everything is good
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="{{asset('admin/js/admin.js')}}"></script>
<script>
  //active bo'lishi dropdown
  $('.nav-sidebar a').each(function(){
      let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
      let link = this.href;
      if(link == location){
          $(this).addClass('active');
          $(this).closest('.has-treeview').addClass('menu-open');
      }
  });
  // inputdagi tanlangan rasmni nomi chiqishi uchun 
  $(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
