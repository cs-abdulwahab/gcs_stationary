@extends('layouts.site')

@section('content')

<style>
.bg-img {
  background-image: url("{{asset('public/front-end/img/mainbanner2.jpg')}}");
  /* background-color: #F8694A; */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.containerclass {
  background-color: white;
  opacity: 0.95;
  height: 540px;
}
.form-group{
    height:34px;
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
					<span class="category-header">Easy Stationary </i></span>
					<!-- <ul class="category-list">
						
					
						
					</ul> -->
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



	<!-- section -->
	<div class="section  bg-img">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form method="POST" action="{{ route('register') }}" id="checkout-form" class="clearfix">
                  @csrf
					<div class="col-md-6 col-md-offset-3  containerclass">
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Register</h3>
							</div>
							<div class="form-group">
								<input class="input" value="{{old('user-id')}}" type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" name="user-id" placeholder="Enter User-ID(Any four Number)" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" value="{{old('name')}}" name="name" placeholder="Name" required>
							</div>
							<div class="form-group">
								<input class="input" value="{{ old('email') }}" type="email" name="email" placeholder="Email" >
								<!-- @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->
							</div>
							<div class="form-group">
								<input class="input" type="tel" value="{{ old('phone') }}"  name="phone" placeholder="Phone Number" required>
							</div>
							<div class="form-group">
								<input class="input"type="number" value="{{ old('nic') }}" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;" name="nic" placeholder="Enter NIC without dashes"  required>
							</div>
							<div class="form-group">
								<input class="input" type="text" value="{{ old('address') }}" name="address" placeholder="Address" required>
							</div>
							<div class="form-group">
								<input class="input" type="password" value="{{ old('password') }}" name="password" placeholder="Password">
							</div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" value="{{ old('password_confirmation') }}" class="input" name="password_confirmation"
								  autocomplete="new-password" placeholder="Confirm Password">
                            </div>
							<div class="form-group">
								<!-- <div class="form-check-inline">
									<input type="radio" class="form-check-input" value="renter" name="usertype" required> Renter
									<input type="radio" class="form-check-input" value="rentee" name="usertype" required> Rentee
								  </div> -->
							</div>
							<button type="submit" class="btn btn-block" style="background-color: #F8694A;color: white;border-radius: 0; margin-top: -15px;">Register</button>
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
