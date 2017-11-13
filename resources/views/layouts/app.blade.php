<!DOCTYPE html>
<html class="no-js">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
  <title>SEEK IT OUT</title>
  
      <!-- Mobile Specific Meta
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
        
      <!-- CSS
        ================================================== -->
        <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- bootstrap.min css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- Grid Component css -->
        <link rel="stylesheet" href="css/component.css">
        <!-- Slit Slider css -->
        <link rel="stylesheet" href="css/slit-slider.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Media Queries -->
        <link rel="stylesheet" href="css/media-queries.css">
        
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <!--
      Google Font
      =========================== -->                    
      
      <!-- Oswald / Title Font -->
      <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
      <!-- Ubuntu / Body Font -->
      <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
      
      <!-- Modernizer Script for old Browsers -->     
      <script src="js/modernizr-2.6.2.min.js"></script>


      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
        ga('create', 'UA-54152927-1', 'auto');
        ga('send', 'pageview');
        
      </script>
    </head>
    <body>
      <!-- Main jQuery -->
      <script src="js/jquery-1.11.0.min.js"></script>
      <!-- Bootstrap 3.1 -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Slitslider -->
      <script src="js/jquery.slitslider.js"></script>
      <script src="js/jquery.ba-cond.min.js"></script>
      <!-- Parallax -->
      <script src="js/jquery.parallax-1.1.3.js"></script>
      <!-- Owl Carousel -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Portfolio Filtering -->
      <script src="js/jquery.mixitup.min.js"></script>
      <!-- Custom Scrollbar -->
      <script src="js/jquery.nicescroll.min.js"></script>
      <!-- Jappear js -->
      <script src="js/jquery.appear.js"></script>
      <!-- Pie Chart -->
      <script src="js/easyPieChart.js"></script>
      <!-- jQuery Easing -->
      <script src="js/jquery.easing-1.3.pack.js"></script>
      <!-- tweetie.min -->
      <script src="js/tweetie.min.js"></script>
      <!-- Google Map API -->
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <!-- Highlight menu item -->
      <script src="js/jquery.nav.js"></script>
      <!-- Sticky Nav -->
      <script src="js/jquery.sticky.js"></script>
      <!-- Number Counter Script -->
      <script src="js/jquery.countTo.js"></script>
      <!-- wow.min Script -->
      <script src="js/wow.min.js"></script>
      <!-- For video responsive -->
      <script src="js/jquery.fitvids.js"></script>
      <!-- Grid js -->
      <script src="js/grid.js"></script>
      <!-- Custom js -->
      <script src="js/custom.js"></script>
      <header id="navigation" class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->
            
            <!-- logo -->
            <a class="navbar-brand" href="/">
              <h1 id="logo">
               <img src="" alt="Seek It Out" />
             </h1>
           </a>
           <!-- /logo -->
         </div>

         <!-- main nav -->
         <nav class="collapse navbar-collapse navbar-right" role="Navigation">
          <ul id="nav" class="nav navbar-nav">
           
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/Restaurants') }}">Restaurants</a></li>
            <li><a href="{{ url('/Categories') }}">Categories</a></li>
            <li><a href="{{ url('/Seats') }}">Pricing</a></li>
            <li><a href="{{ url('/Reservations') }}">Reservations</a></li>
            <li><a href="{{ url('/Payments') }}">Payments</a></li>
            <li><a href="{{ url('/post') }}">Post</a></li>
            &nbsp;
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @guest
            <a class="btn btn-green animated fadeInUp" href="{{ route('login') }}">Login</a>
            <a href="">      </a>
            <a class="btn btn-green animated fadeInUp" href="{{ route('register') }}">Register</a>
            @else
            <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
               {{ Auth::user()->name }} <span class="caret"></span>
             </a>
             <ul class="dropdown-menu" role="menu">
              <li>
               <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
               Logout
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </li>
      @endguest
    </ul>
  </nav>
  <!-- /main nav -->
  
</div>
</header>
<section id="home">      
 <div id="slitSlider" class="sl-slider-wrapper">
 </div>
</section>



</body>
</html>
