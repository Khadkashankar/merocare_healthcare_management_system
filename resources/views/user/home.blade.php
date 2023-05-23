<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <meta name="copyright" content="MACode ID, https://macodeid.com/" />

    <title>MeroCare</title>
    <link rel="icon" href="fav.png" type="image/png">

    <link rel="stylesheet" href="../assets/css/maicons.css" />

    <link rel="stylesheet" href="../assets/css/bootstrap.css" />

    <link
      rel="stylesheet"
      href="../assets/vendor/owl-carousel/css/owl.carousel.css"
    />

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css" />

    <link rel="stylesheet" href="../assets/css/theme.css" />
  </head>
  <body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
      <div class="topbar">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 text-sm">
              <div class="site-info">
                <a href="#"
                  ><span class="mai-call text-primary"></span>099-520143</a
                >
                <span class="divider">|</span>
                <a href="#"
                  ><span class="mai-mail text-primary"></span>
                  mail@example.com</a
                >
              </div>
            </div>
            <div class="col-sm-4 text-right text-sm">
              <div class="social-mini-button">
                <a href=""><span class="mai-logo-facebook-f"></span></a>
                <a href=""><span class="mai-logo-twitter"></span></a>
                <a href=""><span class="mai-logo-dribbble"></span></a>
                <a href=""><span class="mai-logo-instagram"></span></a>
              </div>
            </div>
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .topbar -->

      <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
         

          

          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupport"
            aria-controls="navbarSupport"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
              
              @if(Route::has('login'))
              @auth
              <li class="nav-item">
                <a class="nav-link" style="background-color:aliceblue; color:black;" href="{{url('myappointment')}}">My Appointment</a>
              </li>
              <x-app-layout>
              </x-app-layout>            
              @endauth
              @endif
            </ul>
          </div>
          <!-- .navbar-collapse -->
        </div>
        <!-- .container -->
      </nav>
    </header>

    {{-- <div
      class="page-hero bg-image overlay-dark"
      style="background-image: url(../assets/img/bg_image_1.jpg)"
    >
      <div class="hero-section">
        <div class="container text-center wow zoomIn">
          <span class="subhead">Let's make your life happier</span>
          <h1 class="display-4">Healthy Living</h1>
          <a href="#" class="btn btn-primary">Let's Consult</a>
        </div>
      </div>
    </div>

    <div class="bg-light">
      <div class="page-section py-3 mt-md-n5 custom-index">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-4 py-3 py-md-0">
              <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-secondary text-white">
                  <span class="mai-chatbubbles-outline"></span>
                </div>
                <p><span>Chat</span> with a doctors</p>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-primary text-white">
                  <span class="mai-shield-checkmark"></span>
                </div>
                <p><span>One</span>-Health Protection</p>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-accent text-white">
                  <span class="mai-basket"></span>
                </div>
                <p><span>One</span>-Health Pharmacy</p>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- .page-section -->
@include('user.appointment')
      
    <!-- .bg-light -->

   @include('user.doctor')
   
    <!-- .page-section -->

    <!-- .page-section -->

   
    <!-- .banner-home -->

   @include('user.footer')

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>
  </body>
</html>
