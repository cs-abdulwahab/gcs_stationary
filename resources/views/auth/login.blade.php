@extends('layouts.site')

@section('content')
<style>
		.bg-img {
		  background-image: url("{{asset('public/front-end/img/latest.jpg')}}");
		  /* background-color: #F8694A; */
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		  position: relative;
		}
		
		.containerclass {
		  background-color: white;
		  opacity: 0.95;
		  height: 250px;
		  margin-top: 120px;
		  margin-bottom: 120px;
		}
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
									<a href="{{ route('login') }}" class="text-uppercase">Login</a> / <a href="{{ route('register') }}" class="text-uppercase">Join</a>
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
			
				<div class="category-nav show-on-click">
					<span class="category-header">Easy Stationary</i></span>
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






	<!-- section -->
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	   @endif

	
	<div class="section bg-img">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form  method="POST" action="{{ route('login') }}" id="checkout-form" class="clearfix">
                  @csrf
					<div class="col-md-6 col-md-offset-3 containerclass">
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Login</h3>
							</div>
							<div class="form-group">
								<input class="input" value="{{old('email')}}" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="password" value="{{old('password')}}" name="password"  autocomplete="current-password" placeholder="Password">
							</div>
							
							<button type="submit" class="btn btn-block" style="background-color: #F8694A;color: white;border-radius: 0;">Login</button>
							@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
