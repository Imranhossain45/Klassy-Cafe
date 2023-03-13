<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  
  <title>Klassy Cafe</title>
  <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font-awesome.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/assets/css/templatemo-klassy-cafe.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl-carousel.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightbox.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/woocommerce-2.css') }}">
  
@yield('style')

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{ route('frontend.index') }}" class="logo">
              <img src="{{ asset('frontend/assets/images/klassy-logo.png') }}" align="klassy cafe html template">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{ route('frontend.index') }}" class="active">Home</a></li>


              <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
              <li class="scroll-to-section"><a href="{{ route('frontend.menu') }}">Menu</a></li>
              <li class="scroll-to-section"><a href="{{ route('frontend.chef') }}">Chefs</a></li>
              {{-- <li class="submenu">
                <a href="javascript:;">Features</a>
                <ul>
                  <li><a href="#">Features Page 1</a></li>
                  <li><a href="#">Features Page 2</a></li>
                  <li><a href="#">Features Page 3</a></li>
                  <li><a href="#">Features Page 4</a></li>
                </ul>
              </li> --}}
              <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
              <li class="scroll-to-section"><a href="{{ route('frontend.about') }}">About</a></li>
              <li class="scroll-to-section"><a href="{{ route('frontend.contact') }}">Contact Us</a></li>
              
              <li class="scroll-to-section">
                <!-- Authentication Links -->
                @auth
                <li class="scroll-to-section"><a href="{{ route('frontend.cart.index') }}">My Cart</a></li>
                <li class="scroll-to-section">
                  <a class="" href="{{ route('backend.reservation.myreservation') }}">My Resevation</a>
                </li>
                <li class="scroll-to-section">
                  <div class="dropdown ">
                    <button class="dropdown-toggle btn btn-success" type="button" data-toggle="dropdown" aria-expanded="false">
                      {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu ">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                        {{ __('Logout') }}

                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </div>
                  </div>
                </li>
              @else
                @if (Route::has('login'))
                  <li class="scroll-to-section">
                    <a class="" href="{{ route('login') }}">Login</a>
                  </li>
                @endif

                @if (Route::has('register'))
                  <li class="scroll-to-section">
                    <a class="" href="{{ route('register') }}">Register</a>
                  </li>
                @endif
              @endauth
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  @yield('content')
  <!-- ***** Footer Start ***** -->
  <footer>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <div class="right-text-content">
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="logo">
            <a href="index.html"><img src="frontend/assets/images/white-logo.png" alt=""></a>
          </div>
        </div>
        <div class="col-lg-4 col-xs-12">
          <div class="left-text-content">
            <p>© Copyright Klassy Cafe Co.

              <br>Design: TemplateMo
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="{{ asset('frontend/assets/js/jquery-2.1.0.min.js') }}"></script>

  <!-- Bootstrap -->
  <script src="{{ asset('frontend/assets/js/popper.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

  <!-- Plugins -->
  <script src="{{ asset('frontend/assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/accordions.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/datepicker.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/scrollreveal.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/imgfix.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/lightbox.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/isotope.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>

  <!-- Global Init -->
  <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
  <script>
    $(function() {
      var selectedClass = "";
      $("p").click(function() {
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
        $("#portfolio div").not("." + selectedClass).fadeOut();
        setTimeout(function() {
          $("." + selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);

      });
    });
  </script>
  @yield('script')
</body>

</html>
