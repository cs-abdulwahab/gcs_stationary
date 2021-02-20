<!-- HEADER -->
 <header>
	<div class="navbar-fixed-top" style="background-color: white;">
				<!-- header -->
				<div id="header">
					<div class="container">
						<div class="pull-left">
							<!-- Logo -->
							<div class="header-logo">
								<a class="logo" href="index.html">
									<img src="{{asset('front-end/img/stationary-logo.png')}}" alt="" style="width: 150px;">
								</a>
							</div>
							<!-- /Logo -->
		
							<!-- Search -->
							<div class="header-search">
								<form>
									<input class="input search-input" type="text" placeholder="Enter your keyword">
									<select select id="catID" class="input search-categories">
										<option value="0">All Categories</option>
										@foreach ($categories as $key=> $category)	
										@if ($category->children)
									    @foreach ($category->children as $key=> $child)	
										<option id="cat{{$child->id}}" >{{$child->name}}</option>
									
										@endforeach
										@endif
										@endforeach
									
									</select>
									<button class="search-btn"><i class="fa fa-search"></i></button>
								</form>
							</div>
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
									<a href="{{ route('login') }}" class="text-uppercase">Login</a> / <a href="{{ route('register') }}" class="text-uppercase">Join</a>
									<ul class="custom-menu">
										<li><a href="{{route('rentee')}}"><i class="fa fa-user-o"></i> My Account</a></li>
										<li><a href="checkout.html"><i class="fa fa-check"></i> Checkout</a></li>
										<li><a href="login.html"><i class="fa fa-unlock-alt"></i> Login</a></li>
										<li><a href="registration.html"><i class="fa fa-user-plus"></i> Create An Account</a></li>
									</ul>
								</li>
								<!-- /Account -->
		
								<!-- Cart -->
								<li class="header-cart dropdown default-dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<div class="header-btns-icon">
										<a href="{{route('cart.items')}}"><i class="fa fa-shopping-cart"></i></a>
											<span class="qty">{{ count((array) session('cart')) }}</span>
										</div>
										<strong class="text-uppercase">My Cart:</strong>
										<br>
										<span>00.0$</span>
									</a>
									<div class="custom-menu">
										<div id="shopping-cart">
											<div class="shopping-cart-list">
												<div class="product product-widget">
													<div class="product-thumb">
														<img src="{{asset('front-end/img/product04.jpg')}}" alt="">
													</div>
													<div class="product-body">
														<h3 class="product-price">$00.00 <span class="qty">x0</span></h3>
														<h2 class="product-name"><a href="#">Women Dresses</a></h2>
													</div>
													<button class="cancel-btn"><i class="fa fa-trash"></i></button>
												</div>
											</div>
											<div class="shopping-cart-btns">
												<button class="main-btn">View Cart</button>
												<a href="checkout.html">
													<button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
												</a>
		
											</div>
										</div>
									</div>
								</li>
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
			
				<div class="category-nav show-on-click">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
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
						@foreach ($categories as $key=> $category)	
						<li class="dropdown side-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{ $category->name }}<i class="fa fa-angle-right"></i></a>
							<div class="custom-menu">
								<div class="row">
									<div class="col-md-4">
										<ul class="list-links">
											<li>
												<h3 class="list-links-title">{{ $category->name }}</h3></li>
										    	@if ($category->children)
									            @foreach ($category->children as $key=> $child)			
											<li><a href="products.html">{{ $child->name }}</a></li>
											    @endforeach
												@endif
											<!-- <li><a href="products.html">Headset</a></li>
											<li><a href="products.html">Controller</a></li>
											<li><a href="products.html">Keyboard</a></li>
											<li><a href="products.html">Console</a></li> -->
										</ul>
										<hr class="hidden-md hidden-lg">
									</div>
								</div>
								<div class="row hidden-sm hidden-xs">
									<div class="col-md-12">
										<hr>
										<a class="banner banner-1" href="#">
											<img src="{{asset('front-end/img/gamingbanner.jpg')}}" alt="">
											<div class="banner-caption text-center">
											</div>
										</a>
									</div>
								</div>
							</div>
						</li>
						@endforeach
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
						<li><a href="#">Our Team</a></li>
					</ul>
				</div>
				<!-- menu nav -->
	
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->
