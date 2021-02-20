@extends('layouts.site')
@section('content')

<!-- HEADER -->
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
					<a href="{{route('products.index2')}}"> <span class="category-header">Easy Stationary </i></span></a>
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
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	   @endif




<form  action="{{route('checkout.form')}}"  method="POST" >
 @csrf 
<div class="section">
<div class="container">
   <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
              
                <a href="{{route('products.index')}}" class="btn btn-outline-info btn-sm pull-right">Continiu shopping</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                    <!-- PRODUCT -->
                    @foreach($cart as $id => $cartitems )
                    <div class="row" style="padding-bottom: 38px;" >
                        <div class="col-12 col-sm-12 col-md-2 text-center" style="margin-top: -45px;">
                                <img class="img-responsive"  src="{{ URL::to('/') }}/public/front-end/img/{{$cartitems->image}}" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                           
                            <h4 class="product-name"><strong>{{$cartitems->title}}</strong></h4>
                            <!-- <h5 class="product-name"><strong></strong></h5> -->
                            <input type="hidden" name="cart_id[]" value="{{$cartitems->id}}" />
                           <!-- From: <input class="input" id="datetimepicker6" type="date" name="rentee_start_date[]"  style="padding-top: 10px;width: 180px;margin-bottom: 4px;" >
						  
                           To: <input class="input"  type="date" name="rentee_end_date[]" style="padding-top: 10px;width: 180px;"  >
                             -->
                            <!-- <h4>
                                <small>Product description</small>
                            </h4> -->
                        </div>
                       
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                        
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong> <span class="text-muted"> Rs.{{$cartitems->per_day_cost}}</span></strong></h6>
                            </div>
                           
                            <div class="col-4 col-sm-4 col-md-4">
                            
                                <div class="quantity">
                                    <!-- <input type="button" value="+" class="plus"> -->
                                    <input type="number" name="qty[]" step="1" max="12" min="1"  value="{{ $cartitems->qty }}" title="Quantity:" class="qty">
                                    <!-- <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                           size="4"> -->
                                    <!-- <input type="button" value="-" class="minus"> -->
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                              <!-- <a href="{{route('icon.remove',$cartitems->id )}}">icon</a> -->
                                <a href="{{ route('cart.remove.item',$cartitems->id )}}" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <hr>
                    <!-- END PRODUCT -->
                    <!-- PRODUCT -->
                    <!-- <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong>Product Name</strong></h4>
                            <h4>
                                <small>Product description</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    <input type="button" value="+" class="plus">
                                    <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                           size="4">
                                    <input type="button" value="-" class="minus">
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div> -->
                    <!-- <hr> -->
                    <!-- END PRODUCT -->
                <div class="pull-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        
                    </a>
                </div>
            </div>
            <div class="card-footer">
                <!-- <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="cupone code">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-default" value="Use cupone">
                        </div>
                    </div>
                </div> -->
                <div class="pull-right" style="margin: 10px">
                    <button type="submit" class="btn btn-success pull-right">Checkout</button>
                    <!-- <div class="pull-right" style="margin: 5px">
                        Total price: <b>50.00€</b>
                    </div> -->
                </div>
            </div>
        </div>
</div>
</div>
</form>
<script>
$('#datetimepicker6').datetimepicker({ 
    format: 'DD/MM/YYYY', 
    minDate: moment().millisecond(0).second(0).minute(0).hour(0),
    clear : false 
});
$('#datetimepicker6').datepicker('setDate', today);
</script>
@endsection