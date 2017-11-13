<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <head>
      
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Styles -->
      <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   </head>
   <body style="background: rgb(48, 48, 48);">
      <div id="app">
      <nav class="navbar navbar-default navbar-static-top" style="background: rgb(20,20,20)">
         <div class="container">
            <div class="navbar-header">
               <!-- Collapsed Hamburger -->
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
               <span class="sr-only">Toggle Navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <!-- Branding Image -->
               <!--<a class="navbar-brand" href="{{ url('/') }}">
               {{ config('app.name', 'Laravel') }}
               </a>-->
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
               <!-- Left Side Of Navbar -->
               <ul class="nav navbar-nav">
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="{{ url('/Restaurants') }}">Restaurants</a></li>
                  <li><a href="{{ url('/Categories') }}">Categories</a></li>
                  <li><a href="{{ url('/Seats') }}">Pricing</a></li>
		           <li><a href="{{ url('/Reservations') }}">Reservations</a></li>
		           <li><a href="{{ url('/Payments') }}">Payments</a></li>
		            <li><a href="{{ url('/post') }}">Post</a></li>
                  &nbsp;
               </ul>
               <!-- Right Side Of Navbar -->
               <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @guest
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
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
            </div>
         </div>
      </nav>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               @yield('content')
            </div>
         </div>
      </div>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
   </body>
</html>
