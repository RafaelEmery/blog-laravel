<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rafa Talks - Admin</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('/templateAdmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('/templateAdmin/css/sb-admin-2.css')}}" rel="stylesheet">

  @yield('head')
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rafa Talks</div>
      </a>

      <!-- Heading -->
      <div class="sidebar-heading">
        Abas do Sistema
      </div>

      <!-- Nav Item - Posts -->
      <li class="nav-item">
        <a class="nav-link" href=" {{route('sistema.posts.index')}} ">
          <i class="fas fa-fw fa-book"></i>
          <span>Posts</span></a>
      </li>

      <!-- Nav Item - Comentários -->
      <li class="nav-item">
        <a class="nav-link" href=" {{route('sistema.comentarios.index')}} ">
          <i class="fas fa-fw fa-comments"></i>
          <span>Comentários</span></a>
      </li>

      <!-- Nav Item - Mensagens -->
      <li class="nav-item">
        <a class="nav-link" href=" {{route('sistema.mensagens.index')}} ">
          <i class="fas fa-fw fa-envelope"></i>
          <span>Mensagens</span></a>
      </li>

      {{-- <!-- Nav Item - Usuários -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-user"></i>
          <span>Usuários</span></a>
      </li> --}}

      <!-- Nav Item - Rodapé -->
      <li class="nav-item">
        <a class="nav-link" href=" {{route('sistema.sobre.index')}} ">
          <i class="fas fa-fw fa-info-circle"></i>
          <span>Sobre Nós</span></a>
      </li>

      <!-- Nav Item - Lixeira -->
      <li class="nav-item">
        <a class="nav-link" href=" {{route('sistema.lixeira.index')}} ">
          <i class="fas fa-fw fa-trash"></i>
          <span>Lixeira</span></a>
      </li>

       <!-- Nav Item - Lixeira -->
       <li class="nav-item">
        <a class="nav-link" href=" {{route('site.index')}} " target="_blank">
          <i class="fas fa-fw fa-image"></i>
          <span>Ver Site</span></a>
      </li>

      <!-- Nav Item - Ajuda -->
      <li class="nav-item">
        <a class="nav-link" href=" {{route('sistema.ajuda.index')}} ">
          <i class="fas fa-fw fa-question-circle"></i>
          <span>Ajuda</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ Auth::user()->name }} </span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href=" {{ route('logout') }} ">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          @yield('tituloPagina')

          @include('layout.alerts')
          @yield('conteudo')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; <a href="rafaelemery.github.io">Rafael Emery</a></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('templateAdmin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('templateAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('templateAdmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('templateAdmin/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('templateAdmin/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('templateAdmin/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('templateAdmin/js/demo/chart-pie-demo.js')}}"></script>

  @yield('script')

</body>

</html>
