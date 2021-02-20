@extends('layouts.site')

@section('content')
@include('ourJs')

<!-- HEADER -->



<form method="get"  action="{{route('products.search')}}">

 @csrf
<header>

	<div class="navbar-fixed-top" style="background-color: white;">
	
				<!-- header -->
				<div id="header">
					<div class="container">
						<div class="pull-left">
							<!-- Logo -->
							<div class="header-logo">
								<a class="logo" href="{{route('products.index2')}}">
									<img src="{{asset('public/front-end/img/stationary-logo.png')}}" alt="" style="width: 150px;">
								</a>
							</div>
							<!-- /Logo -->
		
							<!-- Search -->
							<div class="header-search dropdown">

                           
							<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Search By Category
								  <span class="caret"></span></button>
								 	  
								  <input class="input search-input" type="text" name="search" placeholder="Search Product">
								  <button style="width: 39px;height: 37px;" class="search-btn"><i class="fa fa-search"></i></button>
								
									<ul class="dropdown-menu"  id="catID">

									
										@foreach ($categories as $key=> $category)	
										@if ($category->children)
									    @foreach ($category->children as $key=> $child)	
										<li class="text-center" id="cat{{$child->id}}" value="{{$child->id}}"
										>{{$child->name}}</li>
									
										@endforeach
										@endif
										@endforeach
									
									</ul>
									
									
							</div>
							
							
							<!-- <div class="header-search dropdown">

                           
							<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Search By Category
								  <span class="caret"></span></button>
								 	  
								  <input class="input search-input" type="text" name="search" placeholder="Search By Product Name">
								  <button style="width: 39px;height: 37px;" class="search-btn"><i class="fa fa-search"></i></button>
								
									
									
									
							</div> -->
							
							<!-- /Search -->
						</div>
						</form>
					
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
									<a class="dropdown-item" href="{{ route('logout') }}"
												onclick="event.preventDefault();
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
								<li class="header-cart dropdown default-dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<div class="header-btns-icon">
										<a href="{{route('cart.items')}}"><i class="fa fa-shopping-cart"></i></a>
											<span class="qty">{{ count((array) session('cart')) }}</span>
										</div>
										<a href="{{route('cart.items')}}"><strong class="text-uppercase">My Cart:</strong></a>
										<br>
										<!-- <span>00.0</span> -->
									</a>
									<div class="custom-menu">
										<div id="shopping-cart">
											<div class="shopping-cart-list">
												<div class="product product-widget">
													<div class="product-thumb">
														<img src="{{asset('public/front-end/img/product04.jpg')}}" alt="">
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
					<span class="category-header">Easy Stationary </i></span>
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
						<li><a href="#">Our Team</a></li>
					</ul>
				</div>
				<!-- menu nav -->
	
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	@if (session('success'))
             <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong> {{ session('success') }} </strong>
              </div>
         @endif

<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="{{route('products.index2')}}">Home</a></li>
				<li class="active"><a href="{{route('products.index')}}">Products</a></li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ASIDE -->
			

				<!-- MAIN -->
				@if(count($productsfavourits)=="0")
				<div class="col-md-12" align="center">

					<h1 align="center" style="margin:20px">
					No products in 
					<b style="color:red"> </b>
						Favourite </h1>
					

				</div>
				
				
				@else
				
        
				
				<div id="productData">
                @foreach($productsfavourits as $key=> $product)
				
				
				
			
				<div class="col-md-4 col-sm-6 col-xs-6">
               
					<div class="product product-single">
						<div class="product-thumb">
							<a href="product-page.html">
								<button class="main-btn quick-view"><i class="fa fa-search-plus"></i><a href="{{route('product.detail',$product->product_id)}}"> Quick view</a></button>
							</a>
							<img  src="{{ URL::to('public/front-end/img/'.$product->img)}}" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">Rs.{{$product->per_day_cost}}</h3>
                          
							<?php
                            // @if($product->product->rating <= 0)
							// <div class="product-rating">
							//    <i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// </div>
							
							//  @elseif($product->product->rating == 1)
							// <div class="product-rating">
							//    <i class="fa fa-star"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// </div>
							
						
							//  @elseif($product->product->rating == 2)
							// <div class="product-rating">
							//    <i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// </div>
							
							// @elseif($product->product->rating == 3)
							// <div class="product-rating">
							//    <i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// </div>
							
							// @elseif($product->product->rating == 4)
							// <div class="product-rating">
							//    <i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// </div>
							
							// @elseif($product->product->rating >=5)
							// <div class="product-rating">
							//    <i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// </div>
							// @endif
						?>
                        

							<h2 class="product-name"><a href="#">{{$product->title}}</a></h2>
							<div class="product-btns">
								<!-- <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button> -->
								<!-- <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button> -->
								<div class="btn-group">
								<a href='{{url("/add/cart/".$product->product_id)}}' class="btn primary-btn add-to-cart sc-add-to-cart" data-name="Veg biriyani" data-price="199" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Add to Cart</a>
									<!-- <button type="button" class="btn primary-btn add-to-cart" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Rent</button> -->
								</div>
							</div>
						</div>
						
					</div>
				</div>
				

				
                @endforeach 
				@endif
				</div>
				</div>
				
				<!-- /Product Single -->
				<!-- Product Single -->
				
				</div>
				<!-- /Product Single -->

				<!-- Product Single -->
				
				
				
				<!-- Product Single -->
			
				<!-- Product Single -->
				
				
				<!-- Product Single -->
				
				</div>		
			</div>
		</div>
	</div>	
	
	
	

@endsection