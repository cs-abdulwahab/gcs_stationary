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
								<a class="logo" href="index.html">
									<img src="{{asset('public/front-end/img/logo-1.png')}}" alt="" style="width: 150px;">
								</a>
							</div>
							<!-- /Logo -->
		
							<!-- Search -->
							
							<!-- /Search -->
						</div>
						<div class="pull-right">
							<ul class="header-btns">
								<!-- Account -->
								<!-- <li class="header-account dropdown default-dropdown">
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
								</li> -->
								<!-- /Account -->
		
								<!-- Cart -->
								<!-- <li class="header-cart dropdown default-dropdown">
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
								</li> -->
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
					<span class="category-header">Rent Karo</span>
					<ul class="category-list">
						
					
						
					</ul> 
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="#">Home</a></li>
						<li><a href="#">Rent</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Our Team</a></li>
					</ul>
				</div>
				<!-- menu nav -->
	
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	    @if (session('validation1'))
                    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong> {{ session('validation1') }} </strong>
                    </div>
        @endif
		@if (session('validation2'))
                    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong> {{ session('validation2') }} </strong>
                    </div>
        @endif
		@if (session('validation3'))
                    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong> {{ session('validation3') }} </strong>
                    </div>
        @endif



<div class="section bg-img">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<form  action="{{ 
				route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data" 
				class="clearfix" 	onsubmit="return validate ( )">
				  @csrf
				
                  @if(isset($product))
                  @method('PUT')
                  @endif
               
				 
					<div class="col-md-12 containerclass">
					<div class="section-title">
							<h3 class="title">
									Select Category
							</h3>

                    <select class="form-control" name="category_id" style="width: 100%; height: 43px; font-size:20px;" required>
                    <option value="">Select a Category</option>

                    @foreach ($categories as $category)
                        <option style="color:black;font-size:20px;" value="{{ $category->id }}" {{ $category->id === $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @if ($category->children)
                            @foreach ($category->children as $child)
                                <option value="{{ $child->id }}" {{ $child->id === $product->category_id ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->name }}</option>
                            @endforeach
                        @endif
                    @endforeach
                </select>

							
						
							
						   <!-- <select required name="parent_id" style="width: 100%; height: 34px; font-size:20px;" >
						    <option>Select Category</option> 
						   @foreach ($categories as $key=> $category)	
							   <option style="color:black;font-size:20px;"value="{{$category->id}}"><strong>{{ $category->name }}</strong></option>	
									@if ($category->children)
									@foreach ($category->children as $key=> $child)	
								<option value="{{$child->id}}">{{ $child->name }}</option>
									@endforeach		
									@endif
							   
									@endforeach		
							</select> -->
								
					</div>
						<div class="section-title">
							<h3 class="title">
									Title of Your Product
							</h3>
						</div>
						
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<input type="text" class="form-control"  placeholder="Title of Product" name="title" value="{{ $product->title }}" style="border-radius: 0%;" required>
								  </div>
							</div>
							
							<div class="col-md-4">
								  <div class="form-group">
									  <input type="number" class="form-control"  placeholder="Quantity Available" name="qty" value="{{ $product->qty }}"  style="border-radius: 0%;" required>
								  </div>
							</div>
							<div class="col-md-4">
								  <div class="form-group">
									  <input type="text" class="form-control"  placeholder="Product Brand" name="product_brand" value="{{ $product->product_brand }}"  style="border-radius: 0%;" required>
								  </div>
							</div>
							
						</div>
						<div class="section-title">
							<h3 class="title">
									Short Description
							</h3>
						</div>
						<div class="row">
							
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control"  placeholder="Short Description" name="description" value="{{ $product->description }}"   style="border-radius: 0%;" required>
								</div>
							</div>
							<div class="col-md-6">
								  <div class="form-group">
									  <input type="text" class="form-control"  placeholder="Features" name="feature" value="{{ $product->feature }}"  style="border-radius: 0%;" required>
								  </div>
							</div>
						</div>
					
					
						<div class="section-title">
							<h3 class="title">
									 Cost
							</h3>
						</div>
						
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<input type="number"   class="form-control" id="price-from" placeholder="Per day cost" name="per_day_cost" value="{{ $product->per_day_cost }}"  style="border-radius: 0%;" required>
								  </div>
							</div>
							
						
							
							

						</div>

						<div class="section-title">
							<h3 class="title">
									Additional Details
							</h3>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control"  placeholder="Rule while using" name="rule_while_using" value="{{ $product->rule_while_using }}"   style="border-radius: 0%;" required>
								  </div>
							</div>
							<div class="col-md-6">
								  <div class="form-group">
									  <input type="text" class="form-control" placeholder="Terms & Condidtion" name="term_condition" value="{{ $product->term_condition}}"   style="border-radius: 0%;" required>
								  </div>
							</div>
							
							
							
						</div>
						<div class="section-title">
							<h3 class="title">
									Upload Images
							</h3>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label class="custom-file-upload">
									<input type="file"  name="image" required/>
								   <img src="{{URL::to('')}}/public/front-end/img/{{$product->image}}" style="height: 50px; width: 50px;">
									Image Upload
								</label>
							</div>
							<div class="col-md-6">
								<!-- <img src="{{asset('public/front-end/img/product04.jpg')}}" alt="" width="100px"> -->
							</div>
						</div>
						
						<div class="row">
							
							<div class="col-md-6">
								<!-- <video width="400" controls>
									<source src="https://youtu.be/yjgr_35iq5s" type="video/mp4">
								</video> -->
							</div>
						</div>
						
						
						
						<div class="row">
							
							<a href="{{route('renter.index')}}">
								<div class="col-md-3">
									<div type="submit" class="btn btn-block" style="background-color:#F8694A;color: white;border-radius: 0%;">Cancel</div>
								</div>
							</a>
							
							<div class="col-md-3">
								<button type="submit"  class="btn btn-block" style="background-color:#F8694A;color: white;border-radius: 0%;">Update</button>
							</div>
						</div>
						
						
					</div>
				</form>	
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<script>
		
		// var validate=function(){
        //     var from=document.getElementById("price-from").value;
        //     var to=document.getElementById("price-to").value;
		// 	var three=document.getElementById("price-three").value;
        //     if(from<to && from<three)
        //       return true;
        //     alert("The Per Day Cost  should be less than Per Weak cost and Per Month Cost");  
        //     return false;
			
        // }
</script>
@endsection