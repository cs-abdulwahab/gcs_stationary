 @extends('layouts.site')

 @section('content')

 <!-- HEADER -->
 @if (session('success'))
 <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
 	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 	<strong> {{ session('success') }} </strong>
 </div>
 @endif


 <header>
 	<div class="navbar-fixed-top" style="background-color: white;">
 		<!-- header -->
 		<div id="header">
 			<div class="container">
 				<div class="pull-left">
 					<!-- Logo -->
 					<div class="header-logo">
 						<a class="logo" href="{{route('products.index2')}}">
 							<img src="{{asset('public/front-end/img/stationary-logo.png')}}" alt="" style="width: 180px;">
 						</a>
 					</div>

 					<!-- /Logo -->

 					<!-- Search -->
 					<!-- <div class="header-search">
							<form method="get"  action="{{route('products.search')}}">
								@csrf
									<input class="input search-input" type="text" placeholder="Enter your keyword">
									
									<button type="button" style="width: 39px;height: 37px;" class="search-btn"><i class="fa fa-search"></i></button>
								</form>
							</div> -->
 					<!-- /Search -->
 				</div>
 				<div class="pull-right">
 					<ul class="header-btns">
 						<!-- Account -->
 						<li class="header-account dropdown default-dropdown">
 							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
 								<div class="header-btns-icon">
 									<i class="fa fa-user-o"></i>
 								</div>
 								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
 							</div>
 							@if (Route::has('login'))
 							@auth
 							<div>
 								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">
 									{{ __('Logout') }}
 								</a>

 								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 									@csrf
 								</form>

 							</div>
 							@else
 							<a href="{{ route('login') }}" class="text-uppercase">Login</a> /
 							@if (Route::has('register'))
 							<a href="{{ route('register') }}" class="text-uppercase">Join</a>
 							@endif
 							@endauth
 							@endif
 							<ul class="custom-menu">
 								<li><a href="{{route('rentee')}}"><i class="fa fa-user-o"></i> My Account</a></li>
 								<!-- <li><a href="checkout.html"><i class="fa fa-check"></i> Checkout</a></li>
										<li><a href="login.html"><i class="fa fa-unlock-alt"></i> Login</a></li>
										<li><a href="registration.html"><i class="fa fa-user-plus"></i> Create An Account</a></li> -->
 							</ul>
 						</li>

 						<!-- /Account -->

 						<!-- Cart -->

 						<!-- /Cart -->

 						<!-- Mobile nav toggle-->
 						<li class="nav-toggle">
 							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
 						</li>
 						<!-- / Mobile nav toggle -->
 					</ul>
 				</div>
 			</div>
 			<!-- header -->
 		</div>
 		<!-- container -->
 </header>
 <!-- /HEADER -->
 </div>


 <!-- NAVIGATION -->
 <div id="navigation" style="margin-top: 100px;">
 	<!-- container -->
 	<div class="container">
 		<div id="responsive-nav">
 			<!-- category nav -->

 			<div class="category-nav show-on-click>
					<a href="{{route('products.index2')}}"><span class="category-header">Easy Stationary <i></i></span></a>

 				<ul class="category-list">
 					<!-- <li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Dresses <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Men</h3></li>
											<li><a href="products.html">Formal</a></li>
											<li><a href="products.html">Casual</a></li>
											<li><a href="products.html">Groom wear</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Women</h3></li>
											<li><a href="products.html">Party wear</a></li>
											<li><a href="products.html">Bridal dresses</a></li>
											<li><a href="products.html">Casual</a></li>
											<li><a href="products.html">Formal</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="{{asset('front-end/img/dressbanner.jpg')}}" alt="">
											<div class="banner-caption text-center">
											</div>
										</a>
									</div>
								</div>
							</div>
						</li> -->

 					<!-- <li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Electronics <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Electronics</h3></li>
											<li><a href="products.html">LCD</a></li>
											<li><a href="products.html">Cameras</a></li>
											<li><a href="products.html">Projectors</a></li>
											<li><a href="products.html">Voice Assistant</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="{{asset('front-end/img/electronicbanner.jpg')}}" alt="">
											<div class="banner-caption text-center">
											</div>
										</a>
									</div>
								</div>
							</div>
						</li> -->
 					<!-- <li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Baby Products <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Baby Products</h3></li>
											<li><a href="products.html">Stroller</a></li>
											<li><a href="products.html">Walker</a></li>
											<li><a href="products.html">Sterlizers</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="{{asset('front-end/img/babybanner.jpg')}}" alt="">
											<div class="banner-caption text-center">
											</div>
										</a>
									</div>
								</div>
							</div>
						</li> -->
 					<!-- <li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Crockery <i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">Categories</h3></li>
											<li><a href="products.html">Table ware</a></li>
											<li><a href="products.html">Glass ware</a></li>
											<li><a href="products.html">Dishes</a></li>
											<li><a href="products.html">Bowls</a></li>
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="{{asset('front-end/img/crokerybanner.jpg')}}" alt="">
											<div class="banner-caption text-center">
											</div>
										</a>
									</div>
								</div>
							</div>
						</li> -->
 				</ul>
 			</div>
 			<!-- /category nav -->

 			<!-- menu nav -->
 			<div class="menu-nav">
 				<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
 				<ul class="menu-list">
 					<li><a href="{{route('products.index2')}}">Home</a></li>
 					<li><a href="{{route('products.index')}}">Products</a></li>
 					<!--<li><a href="#">About Us</a></li>-->
 					<li><a href="#">Our Team</a></li>
 				</ul>
 			</div>
 			<!-- menu nav -->

 		</div>
 	</div>
 	<!-- /container -->
 </div>
 <!-- /NAVIGATION -->


 <div id="home">
 	<!-- container -->
 	<div class="container">
 		<!-- home wrap -->
 		<div class="home-wrap">
 			<!-- home slick -->
 			<div id="home-slick">
 				<!-- banner -->
 				<div class="banner banner-1">
 					<img src="{{asset('public/front-end/img/bb (1).jpg')}}" alt="">
 					<div class="banner-caption text-center">
 						<!-- <h1 style="color: #F8694A;">Women Dress</h1> -->
 						<!-- <a href="{{route('products.index')}}"><button class="primary-btn">Rent Now</button></a> -->
 					</div>
 				</div>
 				<!-- /banner -->

 				<!-- banner -->
 				<div class="banner banner-1">
 					<img src="{{asset('public/front-end/img/bb (2).jpg')}}" alt="">
 					<div class="banner-caption text-center">
 						<!-- <h1 style="color: #F8694A;">Gaming Equipments</h1> -->
 						<!-- <a href="{{route('products.index')}}"><button class="primary-btn">Rent Now</button></a> -->
 					</div>
 				</div>
 				<!-- /banner -->

 				<!-- banner -->
 				<div class="banner banner-1">
 					<img src="{{asset('public/front-end/img/bb (3).jpg')}}" alt="">
 					<div class="banner-caption text-center">
 						<!-- <h1 style="color: #F8694A;">Electronics </h1> -->
 						<!-- <a href="{{route('products.index')}}"><button class="primary-btn">Rent Now</button></a> -->
 					</div>
 				</div>
 				<!-- /banner -->

 				<!-- banner -->
 				<div class="banner banner-1">
 					<img src="{{asset('public/front-end/img/bb (4).jpg')}}" alt="">
 					<div class="banner-caption text-center">
 						<!-- <h1 style="color: #F8694A;">Baby Products </h1> -->
 						<!-- <a href="{{route('products.index')}}"><button class="primary-btn">Rent Now</button></a> -->
 					</div>
 				</div>
 				<!-- /banner -->

 				<!-- banner -->
 				<div class="banner banner-1">
 					<img src="{{asset('public/front-end/img/f.png')}}" alt="">
 					<div class="banner-caption text-center">
 						<!-- <h1 style="color: #F8694A;">Crockery </h1> -->
 						<!-- <a href="{{route('products.index')}}"><button class="primary-btn">Rent Now</button></a> -->
 					</div>
 				</div>
 				<!-- /banner -->

 				<!-- banner -->
 				<div class="banner banner-1">
 					<img src="{{asset('public/front-end/img/fr.jpg')}}" alt="">
 					<div class="banner-caption text-center">
 						<!-- <h1 style="color: #F8694A;">Men Dresses </h1> -->
 						<!-- <a href="{{route('products.index')}}"><button class="primary-btn">Rent Now</button></a> -->
 					</div>
 				</div>
 				<!-- /banner -->

 			</div>
 			<!-- /home slick -->
 		</div>
 		<!-- /home wrap -->
 	</div>
 	<!-- /container -->
 </div>
 <!-- /HOME -->

 <style>
 	.product-container {
 		position: relative;
 		width: 33%;
 	}

 	.product-image {
 		opacity: 1;
 		display: block;
 		width: 100%;
 		height: auto;
 		transition: .5s ease;
 		backface-visibility: hidden;
 	}

 	.product-middle {
 		transition: .5s ease;
 		opacity: 0;
 		position: absolute;
 		top: 50%;
 		left: 50%;
 		transform: translate(-50%, -50%);
 		-ms-transform: translate(-50%, -50%);
 		text-align: center;
 	}

 	.product-container:hover .product-image {
 		opacity: 0.6;
 	}

 	.product-container:hover .product-middle {
 		opacity: 1;
 	}

 	.input {
 		width: 100%;
 	}

 	/* .product-text {
  background-color:#F8694A;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
} */
 </style>



 <!-- section -->


 <div class="section">
 	<!-- container -->
 	<div class="container">
 		<div class="section-title">
 			<h3 class="title">
 				MY PRODUCTS
 			</h3>
 		</div>
 		<!-- row -->
 		<div class="row">
 			<!-- banner -->
 			<div class="col-sm-4 col-sm-6 product-container">
 				<a class="banner banner-1" href="#" target="_self">
 					<img src="{{asset('public/front-end/img/mp (1).jpg')}}" alt="" class="product-image">
 					<div class="banner-caption text-center product-middle">
 						<!-- <h3 style="color:white;" class="product-text">Women Dresses</h3> -->
 					</div>
 				</a>
 			</div>
 			<!-- /banner -->

 			<!-- banner -->
 			<div class="col-md-4 col-sm-6 product-container">
 				<a class="banner banner-1" href="#">
 					<img src="{{asset('public/front-end/img/mp (1).png')}}" alt="" class="product-image">
 					<div class="banner-caption text-center product-middle">
 						<!-- <h3 style="color:white;" class="product-text">Gaming Equipments</h3> -->
 					</div>
 				</a>
 			</div>
 			<!-- /banner -->

 			<!-- banner -->
 			<div class="col-md-4 col-sm-6 product-container">
 				<a class="banner banner-1" href="#">
 					<img src="{{asset('public/front-end/img/mp (2).jpg')}}" alt="" class="product-image">
 					<div class="banner-caption text-center product-middle">
 						<!-- <h3 style="color:white;" class="product-text">Electronics</h3> -->
 					</div>
 				</a>
 			</div>
 			<!-- /banner -->


 		</div>
 		<!-- /row -->
 	</div>
 	<!-- /container -->
 </div>

 <!--End Section-->


 <div class="section">
 	<div class="container">
 		<div class="row">

 			<!-- banner -->
 			<div class="col-md-4 col-sm-6 product-container">
 				<a class="banner banner-1" href="#">
 					<img src="{{asset('public/front-end/img/mp (3).jpg')}}" alt="" class="product-image">
 					<div class="banner-caption text-center product-middle">
 						<!-- <h3 style="color:white;" class="product-text">Baby Products</h3> -->
 					</div>
 				</a>
 			</div>
 			<!-- /banner -->

 			<!-- banner -->
 			<div class="col-md-4 col-sm-6 product-container">
 				<a class="banner banner-1" href="#">
 					<img src="{{asset('public/front-end/img/s (3).jpg')}}" alt="" class="product-image">
 					<div class="banner-caption text-center product-middle">
 						<!-- <h3 style="color:white;" class="product-text">Crockery</h3> -->
 					</div>
 				</a>
 			</div>
 			<!-- /banner -->

 			<!-- banner -->
 			<div class="col-md-4 col-sm-6 product-container">
 				<a class="banner banner-1" href="#">
 					<img src="{{asset('public/front-end/img/s (2).jpg')}}" alt="" class="product-image">
 					<div class="banner-caption text-center product-middle">
 						<!-- <h3 style="color:white;" class="product-text">Men Dresses</h3> -->
 					</div>
 				</a>
 			</div>
 			<!-- /banner -->

 		</div>
 	</div>
 </div>


 <section class="services pt-60 pb-50" id="services">
 	<div class="container">
 		<div class="section-title">
 			<h3 class="title">
 				MY SERVICES
 			</h3>
 		</div>
 		<div class="row">
 			<div class="col-lg-4 col-md-6">
 				<!-- Single Service -->
 				<div class="single-service">
 					<i class="fa fa-expand"></i>
 					<h4>Extend or opt out anytime</h4>
 					<p>You can extend or opt out of your subscription anytime with your flexible plans.</p>
 				</div>
 			</div>
 			<div class="col-lg-4 col-md-6">
 				<!-- Single Service -->
 				<div class="single-service">
 					<i class="fa fa-bed"></i>
 					<h4>Finest-quality products</h4>
 					<p>Quality matters to you, and us .that's why we do a strict quality-check for every product.</p>
 				</div>
 			</div>
 			<div class="col-lg-4 col-md-6">
 				<!-- Single Service -->
 				<div class="single-service">
 					<i class="fa fa-times"></i>
 					<h4>Cancel anytime</h4>
 					<p>Pay only for the time you use the product and close your subscriptio with out any hassle.</p>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>


 <!-- section -->
 <div class="section">
 	<!-- container -->
 	<div class="container">

 		<div class="section-title">
 			<h3 class="title">
 				MY BLOGS
 			</h3>
 		</div>

 		<!-- row -->
 		<div class="row">
 			<!-- banner -->
 			<div class="col-md-4 col-sm-6">
 				<a class="banner banner-1" href="#">
 					<img src="{{asset('public/front-end/img/b (3).jpg')}}" alt="">
 					<div class="banner-caption text-center">
 					</div>
 				</a>
 			</div>
 			<!-- /banner -->

 			<!-- banner -->
 			<div class="col-md-4 col-sm-6">
 				<a class="banner banner-1" href="#">
 					<img src="{{asset('public/front-end/img/b (2).jpg')}}" alt="">
 					<div class="banner-caption text-center">
 					</div>
 				</a>
 			</div>
 			<!-- /banner -->

 			<!-- banner -->
 			<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
 				<a class="banner banner-1" href="#">
 					<img src="{{asset('public/front-end/img/b (1).jpg')}}" alt="">
 					<div class="banner-caption text-center">
 					</div>
 				</a>
 			</div>
 			<!-- /banner -->

 		</div>
 		<!-- /row -->
 	</div>
 	<!-- /container -->
 </div>
 <!-- /section -->







 <!-- section -->
 <div class="section">
 	<!-- container -->
 	<div class="container">

 		<div class="section-title">
 			<h3 class="title">
 				Contact Us
 			</h3>
 		</div>
 		<!-- row -->
 		<div class="row">
 			<form id="checkout-form" class="clearfix" method="post" action="{{route('contact')}}">
 				@csrf
 				<div class="billing-details col-md-6">
 					<div class="form-group">
 						<input class="input" type="text" name="name" placeholder="Name" required>
 					</div>
 					<div class="form-group">
 						<input class="input" type="email" name="email" placeholder="Email" required>
 					</div>
 					<div class="form-group">
 						<input class="input" type="text" name="phone" placeholder="Phone Number" required>
 					</div>
 				</div>
 				<div class="billing-details col-md-6">
 					<div class="form-group">
 						<textarea class="input" type="text" name="notes" placeholder="Notes" style="width: 550px;height: 95px;" required></textarea>
 					</div>
 					<button type="submit" class="btn btn-block" style="background-color: #F8694A;color: white;border-radius: 0;">Contact Us</button>
 				</div>
 			</form>
 		</div>
 		<!-- /row -->
 	</div>
 	<!-- /container -->
 </div>
 <!-- /section -->




 <style>
 	.section-title {
 		position: relative
 	}

 	.section-title p {
 		font-size: 16px;
 		margin-bottom: 5px;
 		font-weight: 400;
 	}

 	.section-title h4 {
 		font-size: 40px;
 		font-weight: 600;
 		text-transform: capitalize;
 		position: relative;
 		padding-bottom: 20px;
 		display: inline-block
 	}

 	.section-title h4:before {
 		position: absolute;
 		content: "";
 		width: 80px;
 		height: 2px;
 		background-color: #d8d8d8;
 		bottom: 0;
 		left: 50%;
 		margin-left: -40px;
 	}

 	.section-title h4:after {
 		position: absolute;
 		content: "";
 		width: 50px;
 		height: 2px;
 		background-color: #F8694A;
 		left: 0;
 		bottom: 0;
 		left: 50%;
 		margin-left: -25px;
 	}

 	.pt-100 {
 		padding-top: 100px;
 	}

 	.pb-100 {
 		padding-bottom: 100px;
 	}

 	.mb-100 {
 		margin-bottom: 100px;
 	}

 	.services {
 		background-color: white;
 	}

 	.single-service {
 		position: relative;
 		text-align: center;
 		margin-bottom: 50px;
 		-webkit-transition: .3s;
 		transition: .3s;
 		padding: 30px 20px;
 		box-shadow: 0 1px 4px rgba(0, 0, 0, 0.16)
 	}

 	.single-service:before {
 		position: absolute;
 		width: 0;
 		height: 0;
 		background-color: #F8694A;
 		left: 0;
 		top: 0;
 		content: "";
 		-webkit-transition: .3s;
 		transition: .3s
 	}

 	.single-service:after {
 		position: absolute;
 		width: 0;
 		height: 0;
 		background-color: #F8694A;
 		right: 0;
 		bottom: 0;
 		content: "";
 		-webkit-transition: .3s;
 		transition: .3s
 	}

 	.single-service:hover:after,
 	.single-service:hover:before {
 		width: 50%;
 		height: 2px;
 		-webkit-transition: .3s;
 		transition: .3s
 	}

 	.single-service:hover {
 		box-shadow: 1px 3px 10px 0 rgba(0, 0, 0, 0.10)
 	}

 	.single-service i.fa {
 		font-size: 20px;
 		width: 60px;
 		height: 60px;
 		border: 1px solid #ddd;
 		line-height: 60px;
 		margin-bottom: 30px;
 		border-radius: 50%;
 		-webkit-transition: .3s;
 		transition: .3s
 	}

 	.single-service:hover i.fa {
 		background-color: #F8694A;
 		color: #fff;
 		border-color: #F8694A;
 		border-radius: 0;
 	}

 	.single-service h4 {
 		font-size: 20px;
 		font-weight: 400;
 		margin-bottom: 15px;
 		text-transform: capitalize;
 	}

 	.single-service p {
 		font-size: 15px;
 		line-height: 1.8;
 	}
 </style>
 <!--End Section-->
 @endsection