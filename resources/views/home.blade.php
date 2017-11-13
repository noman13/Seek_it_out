<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
	
	<body id="body">

    		<!-- 
		Essential Scripts
		=====================================-->
		
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
	    <!--
	    Start Preloader
	    ==================================== -->
	    <div id="loading-mask">
	    	<div class="loading-img">
	    		<img alt="" src="images/preloader.gif"  />
	    	</div>
	    </div>
        <!--
        End Preloader
        ==================================== -->
        
        <!--
        Welcome Slider
        ==================================== -->
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
        				<li class="current"><a href="/">Home</a></li>
        				<li><a href="/Restaurants">Restaurants</a></li>
        				<li><a href="Categories">Categories</a></li>
        				<li><a href="Seats">Pricing</a></li>
        				<li><a href="Reservations">Reservations</a></li>
        				<li><a href="Payments">Payments</a></li>
        				<li><a href="post">Post</a></li>
        				<li><a href="">     </a></li>
        				<li><a href="">     </a></li>
        				
        			</ul>
        			<ul class="nav navbar-nav navbar-right">
        				<!-- Authentication Links -->
        				@guest
        				
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
    		<div class="sl-slider">
    			
    			<!-- single slide item -->
    			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
    				<div class="sl-slide-inner">
    					<div class="bg-img bg-img-1"></div>
    					<div class="carousel-caption">
    						<div>

    							<img class="wow fadeInUp" src="images/seekitout.png" alt="">
    							
    							<ul class="nav navbar-nav navbar-right">
    								<!-- Authentication Links -->
    								@guest
    								<a class="btn btn-green animated fadeInUp" href="{{ route('login') }}">Login</a>
    								<a href="">      </a>
    								<a class="btn btn-green animated fadeInUp" href="{{ route('register') }}">Register</a>
    								@else
    								
    								@endguest
    							</ul>
    							
    							
    							
    						</div>
    					</div>
    				</div>
    			</div>
    			<!-- /single slide item -->
    			
    			<!-- single slide item -->
    			<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
    				<div class="sl-slide-inner">
    					<div class="bg-img bg-img-2"></div>
    					<div class="carousel-caption">
    						<div>
    							<h2 class="heading animated fadeInDown">Hundreds of Restaurants</h2>
    							<h3 class="animated fadeInUp">Explore and choose your favourite one</h3>
    							<a class="btn btn-green animated fadeInUp" href="/Restaurants">Get Started</a>
    						</div>
    					</div>
    				</div>
    			</div>
    			<!-- /single slide item -->
    			
    			<!-- single slide item -->
    			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
    				<div class="sl-slide-inner">
    					<div class="bg-img bg-img-3"></div>
    					<div class="carousel-caption">
    						<div>
    							<h2 class="heading animated fadeInRight">Reserve Your Own Seat</h2>
    							<h3 class="animated fadeInLeft">Easy Payment System</h3>
    							<a class="btn btn-green animated fadeInUp" href="/Reservations">Book Your Seat Now!!</a>
    						</div>
    					</div>
    				</div>
    			</div>
    			<!-- /single slide item -->

    		</div><!-- /sl-slider -->
    		
    		<nav id="nav-arrows" class="nav-arrows">
    			<span class="nav-arrow-prev">Previous</span>
    			<span class="nav-arrow-next">Next</span>
    		</nav>

    		<nav id="nav-dots" class="nav-dots">
    			<span class="nav-dot-current"></span>
    			<span></span>
    			<span></span>
    		</nav>

    	</div><!-- /slider-wrapper -->
    </section>
    <!--/#home section-->
    
        <!-- 
        Fixed Navigation
        ==================================== -->
        
        <!--
        End Fixed Navigation
        ==================================== -->
        
		<!--
		Start About Section
		==================================== -->
		<section id="about" class="bg-one">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>About <span class="color">App</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
						<div class="wrap-about">							
							<div class="icon-box">
								<i class="fa fa-lightbulb-o fa-4x"></i>
							</div>					
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3 class="ddd">Find your favourite Restaurants</h3>								
								<p>Easily find available seats at your favourite restaurants. Navigate to Hundreds of restaurant and see the available seats. </p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="wrap-about">
							<div class="icon-box">
								<i class="fa fa-users fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3>Manage your own Business</h3>
								<p>Easily manange you business. Easy navigation to update available seats. Push your business to the next level.</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->					
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="wrap-about kill-margin-bottom">
							<div class="icon-box">
								<i class="fa fa-users fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3>Easy Payment System</h3>
								<p>Navigate and see available seats for free. Book your seats at your favourite restaurants at a very low cost with easiest payment methods.</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		
		<!--
		Start Counter Section
		==================================== -->
		
		<section id="counter" class="parallax-section" >
			<div class="container">
				<div class="row">
					
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
						<div class="counters-item">
							<div>
								<span data-speed="3000" data-to="250">250</span>
								<span>+</span>
							</div>
							<i class="fa fa-users fa-3x"></i>
							<h3>Restaurant enlisted</h3>
						</div>
					</div>
					<!-- end first count item -->
					
					<!-- second count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="counters-item">
							<div>
								<span data-speed="3000" data-to="24"></span>
								<span>x7</span>
							</div>
							<i class="fa fa-check-square fa-3x"></i>
							<h3>Service*</h3>
						</div>
					</div>
					<!-- end second count item -->
					
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="counters-item">
							<div>
								<span data-speed="3000" data-to="100"></span>
								<span>%</span>
							</div>
							<i class="fa fa-thumbs-up fa-3x"></i>
							<h3>Positive feedback</h3>
							
						</div>
					</div>
					<!-- end third count item -->
					
					<!-- fourth count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="counters-item kill-margin-bottom">
							<div>
								<span data-speed="3000" data-to="1000"></span>
								<span>+</span>
							</div>
							<i class="fa fa-coffee fa-3x"></i>
							<h3>Food items in 250+ restaurents</h3>
						</div>
					</div>
					<!-- end fourth count item -->
					
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->
		
		
		
		
		<!-- Start Our Team
			=========================================== -->
			
			<section id="our-team">
				<div class="container">
					<div class="row">
						
						<!-- section title -->
						<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
							<h2>Meet The <span class="color">Team</span></h2>
							<div class="border"></div>
						</div>
						<!-- /section title -->
						
						<!-- team member -->
						<div class="col-md-2 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
							<article class="team-mate">
								<div class="member-photo">
									<!-- member photo -->
									<img class="img-responsive" src="images/team/member-1.jpg" alt="Chandrima Barua">
									<!-- /member photo -->
									
									<!-- member social profile -->
									<div class="mask">
										<ul class="clearfix">
											<li><a href="https://www.facebook.com/chandrima.barua.54"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
									<!-- /member social profile -->
								</div>
								
								<!-- member name & designation -->
								<div class="member-title">
									<h4>Chandrima Barua</h4>
									<span>ID : 15701008</span>
								</div>
								<!-- /member name & designation -->
								
								<!-- about member -->
								<div class="member-info">
									<p>6th Semester, Session: (2014-2015) Department of CSE, </p> <p>University of Chittagong.</p>
								</div>
								<!-- /about member -->
								
							</article>
						</div>
						<!-- end team member -->
						
						<!-- team member -->
						<div class="col-md-2 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
							<article class="team-mate">
								<div class="member-photo">
									<!-- member photo -->
									<img class="img-responsive" src="images/team/member-2.jpg" alt="Abdullah Al Noman">
									<!-- /member photo -->
									
									<!-- member social profile -->
									<div class="mask">
										<ul class="clearfix">
											<li><a href="https://www.facebook.com/a.noman13"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
									<!-- /member social profile -->
								</div>
								
								<!-- member name & designation -->
								<div class="member-title">
									<h4>Abdullah AL Noman</h4>
									<span>ID : 15701016</span>
								</div>
								<!-- /member name & designation -->
								
								<!-- about member -->
								<div class="member-info">
									<p>6th Semester, Session: (2014-2015) Department of CSE, </p> <p>University of Chittagong.</p>
								</div>
								<!-- /about member -->
								
							</article>
						</div>
						<!-- end team member -->
						
						<!-- team member -->
						<div class="col-md-2 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
							<article class="team-mate">
								<div class="member-photo">
									<!-- member photo -->
									<img class="img-responsive" src="images/team/member-3.jpg" alt="Momtahin">
									<!-- /member photo -->
									
									<!-- member social profile -->
									<div class="mask">
										<ul class="clearfix">
											<li><a href="https://www.facebook.com/umme.meehan"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
									<!-- /member social profile -->
								</div>
								
								<!-- member name & designation -->
								<div class="member-title">
									<h4>Momtahin</h4>
									<span>ID : 15701025</span>
								</div>
								<!-- /member name & designation -->
								
								<!-- about member -->
								<div class="member-info">
									<p>6th Semester, Session: (2014-2015) Department of CSE, </p> <p>University of Chittagong.</p>
								</div>
								<!-- /about member -->
								
							</article>
						</div>
						<!-- end team member -->
						
						
						<!-- team member -->
						<div class="col-md-2 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
							<article class="team-mate">
								<div class="member-photo">
									<!-- member photo -->
									<img class="img-responsive" src="images/team/member-4.jpg" alt="Antika Saha">
									<!-- /member photo -->
									
									<!-- member social profile -->
									<div class="mask">
										<ul class="clearfix">
											<li><a href="https://www.facebook.com/profile.php?id=100008918292162"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
									<!-- /member social profile -->
								</div>
								
								<!-- member name & designation -->
								<div class="member-title">
									<h4>Antika Saha</h4>
									<span>ID : 15701049</span>
								</div>
								<!-- /member name & designation -->
								
								<!-- about member -->
								<div class="member-info">
									<p>6th Semester, Session: (2014-2015) Department of CSE, </p> <p>University of Chittagong.</p>
								</div>
								<!-- /about member -->
								
							</article>
						</div>
						<!-- end team member -->
						<!-- team member -->
						<div class="col-md-2 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
							<article class="team-mate">
								<div class="member-photo">
									<!-- member photo -->
									<img class="img-responsive" src="images/team/member-5.jpg" alt="Urmisha">
									<!-- /member photo -->
									
									<!-- member social profile -->
									<div class="mask">
										<ul class="clearfix">
											<li><a href="https://www.facebook.com/u.ghost7"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
									<!-- /member social profile -->
								</div>
								
								<!-- member name & designation -->
								<div class="member-title">
									<h4>Nur Meheruma</h4>
									<span>ID : 15701069</span>
								</div>
								<!-- /member name & designation -->
								
								<!-- about member -->
								<div class="member-info">
									<p>6th Semester, Session: (2014-2015) Department of CSE, </p> <p>University of Chittagong.</p>
								</div>
								<!-- /about member -->
								
							</article>
						</div>
						<!-- end team member -->
						
					</div>  	<!-- End row -->
				</div>   	<!-- End container -->
			</section>   <!-- End section -->
			
			
			
			<footer id="footer" class="bg-one">
				<div class="container">
					<div class="row wow fadeInUp" data-wow-duration="500ms">
						<div class="col-lg-12">
							
							<!-- Footer Social Links -->
							
							<!--/. End Footer Social Links -->

							<!-- copyright -->
							<div class="copyright text-center">
								<a href="/">
									<img src="images/seekitout.png" alt="Seek It Out" /> 
								</a>
								<br />
								
								<p>Designed And Developed by SEEK IT OUT Team</a>. Copyright &copy; 2017. All Rights Reserved.</p>
							</div>
							<!-- /copyright -->
							
						</div> <!-- end col lg 12 -->
					</div> <!-- end row -->
				</div> <!-- end container -->
			</footer> <!-- end footer -->
			
		<!-- Back to Top
			============================== -->
			<a href="javascript:;" id="scrollUp">
				<i class="fa fa-angle-up fa-2x"></i>
			</a>
			
		<!-- end Footer Area
			========================================== -->
			
			

		</body>
		</html>