@extends('layouts.site')

@section('content')
@include('ourJs')

<!-- HEADER -->

<form method="get" action="{{route('products.search')}}">

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


							<button class="btn btn-primary dropdown-toggle"  type="button" data-toggle="dropdown" style="height: 41px;">Search By Category
								<span class="caret"></span></button>

							<input class="input search-input" type="text" name="search" placeholder="Search  Product">
							<button style="width: 39px;height: 37px;" class="search-btn"><i class="fa fa-search"></i></button>

							<ul class="dropdown-menu" id="catID">


								@foreach ($categories as $key=> $category)
								@if ($category->children)
								@foreach ($category->children as $key=> $child)
								<li class="text-center" id="cat{{$child->id}}" value="{{$child->id}}">{{$child->name}}</li>

								@endforeach
								@endif
								@endforeach

							</ul>


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
				<span class="category-header">Rent-Kro </i></span>
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

@if (session('success'))
<div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong> {{ session('success') }} </strong>
</div>
@endif
@if (session('condition'))
<div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong> {{ session('condition') }} </strong>
</div>
@endif



<div class="container">
	<ul class="breadcrumb">
		<li><a href="{{route('products.index2')}}">Home</a></li>
		<li class="active"><a href="{{route('favourit.get')}}">Favourite</a></li>
	</ul>
</div>

<!-- /BREADCRUMB -->

<!-- section -
		 container -->
<!-- row -->
<div class="section">
	<!-- container -->
	<div class="container">


		<div class="row">



			<div id="productData">
				@foreach($products as $key=> $product)
				<div class="col-lg-4 col-sm-6">
					<div class="product product-single">
						<div class="product-thumb">
							<a href="{{route('product.detail',$product->id)}}">
								<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
							</a>
							<img src="{{ URL::to('public/front-end/img/'.$product->image)}}" alt="">
						</div>
						<div class="product-body" style="height:200px;">
							<h3 class="product-price">Rs.{{$product->per_day_cost}}</h3>
							<!-- <div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div> -->
							<h2 class="product-name"><a href="#">{{$product->title}}</a></h2>
							<div class="product-btns">
								<div class="btn-group">
									<a href='{{url("/add/cart/".$product->id)}}' class="btn primary-btn add-to-cart sc-add-to-cart" data-name="Veg biriyani" data-price="199" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Add to Cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>

		</div>

	</div>

</div>




@endsection