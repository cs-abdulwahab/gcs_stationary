@extends('layouts.site')
@section('content')

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

                           
							<!-- <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Search By Category -->
								  <!-- <span class="caret"></span></button> -->
								 	  
								  <input class="input search-input" type="text" name="search" placeholder="Search  Product ">
								  <button style="width: 39px;height: 37px;" class="search-btn"><i class="fa fa-search"></i></button>
								
									<!-- <ul class="dropdown-menu"  id="catID">

									
										@foreach ($categories as $key=> $category)	
										@if ($category->children)
									    @foreach ($category->children as $key=> $child)	
										<li class="text-center" id="cat{{$child->id}}" value="{{$child->id}}"
										>{{$child->name}}</li>
									
										@endforeach
										@endif
										@endforeach
									
									</ul> -->
									
									
							</div>
							
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
								<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
								</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
									@else
									<a href="{{ route('login') }}" class="text-uppercase">Login</a> /
									@if (Route::has('register'))
									 <a href="{{ route('register') }}" class="text-uppercase">Join</a>
									 @endif
									 @endauth
									 @endif									<ul class="custom-menu">
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
										<!-- <span>00.0$</span> -->
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
					<span class="category-header">Easy Stationary </span>
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
											<img src="{{asset('public/front-end/img/gamingbanner.jpg')}}" alt="">
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
		@if (session('success'))
						<div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong> {{ session('success') }} </strong>
						</div>
		@endif
		@if (session('favourit'))
						<div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong> {{ session('favourit') }} </strong>
						</div>
		@endif
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="{{route('products.index2')}}">Home</a></li>
				<li class="active"><a href="{{route('products.index')}}">Products</a></li>
				<li class="active"><a href="{{route('favourit.get')}}">Favourite Products</a></li>
			</ul>
		</div>
	</div>

<div class="section">
		<!-- container -->
		<div class="container Productcontainer">
			<!-- row -->
			<div class="row">
				<!--  Product Details -->
                @if($product)
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view" style="border: 5px inset;">
							<div class="product-view">
								<img src="{{ URL::to('public/front-end/img/'.$product->image)}}" alt="">
							</div>
							<div class="product-view">
								<img src="{{ URL::to('public/front-end/img/'.$product->image)}}" alt="">
							</div>
							<div class="product-view">
								<img src="{{ URL::to('public/front-end/img/'.$product->image)}}" alt="">
							</div>
							<div class="product-view">
								<img src="{{ URL::to('public/front-end/img/'.$product->image)}}" alt="">
							</div>
						</div>
						<div id="product-view">
							<div class="product-view">
								<img src="{{ URL::to('public/front-end/img/'.$product->image)}}" alt="">
							</div>
							<div class="product-view">
								<img src="{{ URL::to('public/front-end/img/'.$product->image)}}" alt="">
							</div>
							<div class="product-view">
								<img src="{{ URL::to('public/front-end/img/'.$product->image)}}" alt="">
							</div>
							<div class="product-view">
								<img src="{{ URL::to('public/front-end/img/'.$product->image)}}" alt="">
							</div>
						</div>

					</div>
					<div class="col-md-6 productsingle">
						<div class="product-body">
							<!--<div class="product-label">-->
							<!--	<span>New</span>-->
							<!--</div>-->
							
							<h2 class="product-name">{{$product->category->name}}</h2>
							<h3 class="product-price"> Cost Rs:{{$product->per_day_cost}}</h3>
						
                           
							<p><strong>Available Quantity:</strong> {{$product->qty}}</p>
							<p><strong>Brand:</strong> {{$product->product_brand}}</p>
							<p><strong>Description:</strong> {{$product->description}}</p>
							<div class="product-options">
								<ul class="size-option">
									<li><span class="text-uppercase">Features:</span></li>
									<li class="active"><a href="#">{{$product->feature}}</a></li>
									<!-- <li><a href="#">500 GB HARD</a></li>
									<li><a href="#">2.5 GHZ PROCESSOR</a></li>
									<li><a href="#">5th Generation</a></li> -->
								</ul>
							</div>
							<!-- <table>
								<tr><p><strong>Features:</tr>
								<tr>
									<td>
										<div class="btn-group" style="padding-top: 10px;">
											<button type="button" class="btn primary-btn add-to-cart" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Best Quality</button>
											<button type="button" class="btn primary-btn add-to-cart" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Nice Stuff</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="btn-group" style="padding-top: 10px;">
											<button type="button" class="btn primary-btn add-to-cart" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Best Quality</button>
											<button type="button" class="btn primary-btn add-to-cart" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Nice Stuff</button>
										</div>
									</td>
								</tr>
							</table> -->
							<div class="product-options">
								
							</div>
							<!-- <div>
								<span class="text-uppercase">From: </span>
								<input class="input" type="date" id="fromdate" style="padding-top: 10px;width: 200px;">

								<span class="text-uppercase">To: </span>
								<input class="input" type="date" id="todate" style="padding-top: 10px;width: 200px;">
							</div>
							 -->
							<div class="product-btns" style="padding-top: 10px;">
								<!-- <div class="qty-input" style="padding-left: 12px;">
									<span class="text-uppercase">QTY: </span>
									<input class="input" type="number">
								</div> -->
								<div class="btn-group" style="padding-left: 42px;">
									<a href='{{url("/add/cart/".$product->id)}}' class="btn primary-btn add-to-cart sc-add-to-cart" data-name="Veg biriyani" data-price="199" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Add to Cart</a>
								  <form method="post" action="{{route('favourit.item')}}">
								   @csrf
								   <input type="hidden" name="product_id" value="{{$product->id}}">
								  <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								  </form>
								</div>
							</div>						
						</div>
					</div>

					
				</div>	
               
			</div>	
			<!-- row -->
			<div class="row ProductRow">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Recommended</h2>
						<div class="pull-right">
							<div class="product-slick-dots-2 custom-dots">
							</div>
						</div>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
				<!-- <div class="col-md-3 col-sm-6 col-xs-6 productsingle">
					<div class="product product-single product-hot">
						<div class="product-thumb">
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
							<img src="{{asset('front-end/img/product04.jpg')}}" alt="">
						</div>
						<div class="product-body">
							<span class="product-price">Rs.0000</span>
                            <h2 class="product-name"><a href="#">Dresses</a></h2>
							
							
							
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<div class="btn-group">
									<button type="button" class="btn primary-btn add-to-cart add-to-cart-button" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Cart</button>
									<button type="button" class="btn primary-btn add-to-cart" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Rent</button>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- /Product Single -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6 productsingle">
				
					<div class="row">
						<div id="product-slick-2" class="product-slick">
							<!-- Product Single -->
						
				@foreach($orderItems as $productitem)			
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<a href="product-page.html">
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i><a href="{{route('product.detail',$productitem->product_id)}}"> Quick view</a></button>
							</a>
							<img  src="{{ URL::to('public/front-end/img/'.$productitem->image)}}" alt="">						</div>
						<div class="product-body">
							<h3 class="product-price">{{$productitem->per_day_cost}}</h3>
							<!-- <div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div> -->
							<h2 class="product-name"><a href="#">{{$productitem->title}}</a></h2>
							<div class="product-btns">
								<!-- <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button> -->
								<div class="btn-group">
								<a href='{{url("/add/cart/".$productitem->product_id)}}' class="btn primary-btn add-to-cart sc-add-to-cart" data-name="Veg biriyani" data-price="199" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Add to Cart</a>
									<!-- <button type="button" class="btn primary-btn add-to-cart" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Rent</button> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
				<!-- /Product Single -->

				<!-- Product Single -->
				
				<!-- /Product Single -->

				<!-- Product Single -->
				
				<!-- /Product Single -->

				<!-- Product Single -->
				
				<!-- /Product Single -->
			</div>
			<!-- /row -->
			</div>
			<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		<div class="col-md-12">
			<div class="product-tab">
				<ul class="tab-nav">
					<li><a data-toggle="tab" href="#tab2">Rule While Using</a></li>
					<li><a data-toggle="tab" href="#tab4">Terms & Condition</a></li>
					<li><a data-toggle="tab" href="#tab5">Usage Policy</a></li>
					<?php $count_reviews= count($data) ;?>
					<li><a data-toggle="tab" href="#tab3">Reviews ({{$count_reviews}})</a></li>
				</ul>
				<div class="tab-content ">
                
                
					<div id="tab2" class="tab-pane fade in active">
						<p>
                        {{$product->rule_while_using}}
						</p>
                       
					</div>
					<div id="tab4" class="tab-pane fade in active">
						<p>
                        {{$product->term_condition}}
						</p>
					</div>
                    <div id="tab5" class="tab-pane fade in active">
						<p>
                        {{$product->usage_policy}}
						</p>
					</div>
                    <div id="tab2" class="tab-pane fade in active">
						<p>
                        {{$product->rule_while_using}}
						</p>
					</div>
                    
                    
					<div id="tab3" class="tab-pane fade">

						<div class="row">
							<div class="col-md-6">
								<div class="product-reviews">
							

									
									@foreach($data as $review)
									<div class="single-review">
									
										<div class="review-heading">
											<div><a href="#"><i class="fa fa-user-o"></i>{{$review->person_name}}</a></div>
											<div><a href="#"><i class="fa fa-clock-o"></i>{{$review->created_at}}</a></div>
											<div class="review-rating pull-right">
											
											
											@if($review->rating <= 0)
											
											<i class="fa fa-star-o empty"></i>
												<i class="fa fa-star-o empty"></i>
												<i class="fa fa-star-o empty"></i>
												<i class="fa fa-star-o empty"></i>
												<i class="fa fa-star-o empty"></i>
											
											
											@elseif($review->rating == 1)
											
											<i class="fa fa-star"></i>
												<i class="fa fa-star-o empty"></i>
												<i class="fa fa-star-o empty"></i>
												<i class="fa fa-star-o empty"></i>
												<i class="fa fa-star-o empty"></i>
											
											
										
											@elseif($review->rating == 2)
											
											<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o empty"></i>
												<i class="fa fa-star-o empty"></i>
												<i class="fa fa-star-o empty"></i>
										
											
											@elseif($review->rating == 3)
											
											<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o empty"></i>
												<i class="fa fa-star-o empty"></i>
											
											
											@elseif($review->rating == 4)
											
											<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o empty"></i>
										
											
											@elseif($review->rating >=5)
											
											<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											
											@endif
											</div>
										</div>
										<div class="review-body">
											<p>
												{{$review->notes}}
											</p>
										</div>
									</div>
									@endforeach
									

									<ul class="reviews-pages">
										<li class="active">1</li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-md-6">
								<h4 class="text-uppercase">Write Your Review</h4>
								
								<form class="review-form" method="post" action="{{route('review.store')}}">
									@csrf
									
									<div class="form-group">
										<input class="input" value="{{$product->id}}" type="hidden" name="product_id"/>
									</div>
									<div class="form-group">
										<input class="input" value="" type="text" name="person_name" placeholder="Enter Your name" required/>
									</div>
									<div class="form-group">
										<input class="input" value="" type="email" name="person_email" placeholder="Enter Your Email" required/>
									</div>
									<div class="form-group">
										<textarea class="input" name="notes" placeholder="Your review" required></textarea>
									</div>
									<div class="form-group">
										<div class="input-rating">
											<strong class="text-uppercase">Your Rating: </strong>
											<div class="stars">
												<input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
												<input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
												<input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
												<input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
												<input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
											</div>
										</div>
									</div>
									<button class="primary-btn">Submit</button>
								</form>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /section -->
@endsection