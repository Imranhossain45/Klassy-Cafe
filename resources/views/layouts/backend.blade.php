<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')-{{ config('app.name') }}</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('backend/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('backend/assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img class="" src="{{ asset('frontend/assets/images/klassy-logo.png') }}" width="100px" height="50px">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>


      @if (Auth::user()->user_type == 1)
        <!-- Chef Start -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseChefs"
            aria-expanded="true" aria-controls="collapseChefs">
            <i class="fas fa-user"></i>
            <span>Chefs</span>
          </a>
          <div id="collapseChefs" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

              <a class="collapse-item" href="{{ route('backend.chef.create') }}">Add Chef</a>
              <a class="collapse-item" href="{{ route('backend.chef.index') }}">All Chefs</a>
            </div>
          </div>
        </li>
        <!-- Chef end -->
        <!-- Breakfast Start -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBreakfast"
            aria-expanded="true" aria-controls="collapseBreakfast">
            <i class="fas fa-hamburger"></i>
            <span>Breakfast</span>
          </a>
          <div id="collapseBreakfast" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

              <a class="collapse-item" href="{{ route('backend.breakfast.create') }}">Add Breakfast</a>
              <a class="collapse-item" href="{{ route('backend.breakfast.index') }}">All Breakfast</a>
            </div>
          </div>
        </li>
        <!-- Breakfast end -->
        <!-- Lunch Start -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLunch"
            aria-expanded="true" aria-controls="collapseLunch">
            <i class="fas fa-hamburger"></i>
            <span>Lunch</span>
          </a>
          <div id="collapseLunch" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

              <a class="collapse-item" href="{{ route('backend.lunch.create') }}">Add Lunch</a>
              <a class="collapse-item" href="{{ route('backend.lunch.index') }}">All Lunch</a>
            </div>
          </div>
        </li>
        <!-- Lunch end -->
        <!-- Dinner Start -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDinner"
            aria-expanded="true" aria-controls="collapseDinner">
            <i class="fas fa-hamburger"></i>
            <span>Dinner</span>
          </a>
          <div id="collapseDinner" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

              <a class="collapse-item" href="{{ route('backend.dinner.create') }}">Add Dinner</a>
              <a class="collapse-item" href="{{ route('backend.dinner.index') }}">All Dinner</a>
            </div>
          </div>
        </li>
        <!-- Dinner end -->
        <!-- Cake_pastry Start -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCake_pastry"
            aria-expanded="true" aria-controls="collapseCake_pastry">
            <i class="fas fa-hamburger"></i>
            <span>Cake_pastry</span>
          </a>
          <div id="collapseCake_pastry" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

              <a class="collapse-item" href="{{ route('backend.cake_pastry.create') }}">Add Cake_pastry</a>
              <a class="collapse-item" href="{{ route('backend.cake_pastry.index') }}">All Cake_pastry</a>
            </div>
          </div>
        </li>
        <!-- Cake_pastry end -->
        <!-- Coupon Start -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCoupon"
            aria-expanded="true" aria-controls="collapseCoupon">
            <i class="fas fa-hamburger"></i>
            <span>Coupon</span>
          </a>
          <div id="collapseCoupon" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ route('backend.coupon.index') }}">All Coupon</a>
            </div>
          </div>
        </li>
        <!-- Coupon end -->
        <!-- Shipping Charge Start -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseShipping_Charge"
            aria-expanded="true" aria-controls="collapseShipping_Charge">
            <i class="fas fa-hamburger"></i>
            <span>Shipping Charge</span>
          </a>
          <div id="collapseShipping_Charge" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ route('backend.shippingcharge.index') }}">All Shipping Charge</a>
            </div>
          </div>
        </li>
        <!-- Shipping Charge end -->
      @endif
      <!-- Reservation Start -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReservation"
          aria-expanded="true" aria-controls="collapseReservation">
          <i class="fas fa-hamburger"></i>
          <span>Reservation</span>
        </a>
        <div id="collapseReservation" class="collapse" aria-labelledby="headingPages"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item"
              href="{{ Auth::user()->user_type == 1 ? route('backend.reservation.index') : route('backend.reservation.myreservation') }}">All
              Reservation</a>
          </div>
        </div>
      </li>
      <!-- Reservation end -->


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
        <nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar mb-4 pb-3 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
              data-toggle="dropdown">
              <img class="img-profile rounded-circle mr-2 mb-2" src="{{ asset('backend/assets/img/team (1).jpg') }}">
              <span class="mb-2 d-none d-lg-inline text-white small"
                style="font-size: 30px">{{ Auth::user()->name }}</span>

            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right text-bolder" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>

              <a class="dropdown-item" style="padding-bottom: 500px; text-align:center" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-danger pr-2"></i>
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
              </form>
            </div>
          </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @include('alert.messsage')

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
          @yield('content')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('backend/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('backend/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('backend/assets/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('backend/assets/vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('backend/assets/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('backend/assets/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
