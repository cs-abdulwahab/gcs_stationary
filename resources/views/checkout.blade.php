@extends('layouts.site')
@section('content')
<style>
  .input{
	  width:100%;
  }
</style>
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
									<img src="{{asset('public/front-end/img/stationary-logo.png')}}" alt="" style="width: 150px;">
								</a>
							</div>
							<!-- /Logo -->
		
							<!-- Search -->
							
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





<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="{{route('products.index2')}}">Home</a></li>
				<li class="active"><a href="{{route('cart.items')}}">Cart</a></li>
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
				<form action="{{route('order.place')}}" method="POST" class="clearfix">
                @csrf
					<div class="col-md-6">
						<div class="billing-details">
							<!-- <p>Already a customer ? <a href="{{route('login')}}">Login</a></p> -->
							<div class="section-title">
								<h3 class="title">Billing Details</h3>
							</div>
							<!-- <div class="form-group">
								<input class="input" type="text" name="firstname" placeholder="First Name">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="lastname" placeholder="Last Name">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="gmail" placeholder="Email">
							</div>-->
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address" required>
							</div> 
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zipcode" placeholder="ZIP Code" >
							</div>
							<!-- <div class="form-group">
								<input class="input" type="tel" name="phone" placeholder="Telephone">
							</div> -->
							<div class="form-group">
								<!-- <div class="input-checkbox">
									<input type="checkbox" id="register">
									<label class="font-weak" for="register">Create Account?</label>
									<div class="caption">
										<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div> -->
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">Shiping Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-1" checked>
								<label for="shipping-1">Free Shiping -  00.00</label>
								<div class="caption">
									<p>
										Free Shiping
									</p>
								</div>
							</div>
							<div class="input-checkbox">
								<!-- <input type="radio" name="shipping" id="shipping-2">
								<label for="shipping-2">Standard - $00.00</label>
								<div class="caption">
									<p>
										Pay Standard Charges
									</p>
								</div> -->
							</div>
						</div>

						<div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Payments Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-1" checked>
								<label for="payments-1">Cash On Delivery</label>
								<!-- <div class="caption">
									<p>
										Pay through Bank
									</p>
								</div> -->
							</div>
							<div class="input-checkbox">
								<!-- <input type="radio" name="payments" id="payments-2">
								<label for="payments-2">Cheque Payment</label>
								<div class="caption">
									<p>
										Pay through Cheque
									</p>
								</div> -->
							</div>
							<div class="input-checkbox">
								<!-- <input type="radio" name="payments" id="payments-3">
								<label for="payments-3">Easypaisa</label>
								<div class="caption">
									<p>
										Pay through Easypaisa
									</p>
								</div> -->
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Order Review</h3>
							</div>
<table class="shopping-cart-table table">
								<thead>
								
									<tr>
										<th>Product</th>
										
										 
										<th class="text-center">Cost</th>
										
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
							   	
								</thead>
								<tbody>
								<?php $total=0; 
								      $totaldays=0;
								?>     
								@foreach($cartitems as $id =>  $cartitem)
								<?php $total += $cartitem->per_day_cost * $cartitem->qty ?>
									<tr>
										<!-- <td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td> -->
										<td class="details">
											<a href="#">{{$cartitem->title}}</a>
										</td>
															
										<td class="price text-center"><strong>{{ ($cartitem->per_day_cost)}}</strong></td>
										<!-- <td class="price text-center"><strong>{{$cartitem->security_cost}}</strong></td> -->

										<td class="qty text-center">{{$cartitem->qty}}</td>
										<td class="total text-center"><strong class="primary-color">RS.{{ ($cartitem->qty * $cartitem->per_day_cost)}} </strong></td>
										<!-- <td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td> -->
									</tr>
								@endforeach			
									
								</tbody>
								<tfoot>
									<!-- <tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total">$00.00</th>
									</tr> -->
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>NET TOTAL</th>
										<th colspan="2" class="total">RS.{{$total}}</th>
									</tr>
								</tfoot>
							</table>
							<div class="pull-right">
								<button type="submit" class="primary-btn">Place Order</button>
							</div>
						</div>

					</div>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

@endsection