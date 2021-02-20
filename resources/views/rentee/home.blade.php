@extends('layouts.app')
@section('content')
<header>
	<div class="navbar-fixed-top" style="background-color: white;">
				<!-- header -->
				<div id="header">
					<div class="container">
						<div class="pull-left">
							<!-- Logo -->
							<div class="header-logo">
								<a class="logo" href="{{route('renter.index')}}">
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
									<!-- <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
										<div class="header-btns-icon">
											<i class="fa fa-user-o"></i>
										</div>
										<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
									</div> -->
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
									
								</li>
								
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
            </div>
    <div id="navigation" style="margin-top: 100px;">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
			
				<div class="category-nav show-on-click">
				<a href="{{route('renter.index')}}">	<span class="category-header">Easy Stationary</i></span> </a>
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
			<!-- /HEADER -->
            
<div class="container" style="margin-top: 20px;">
	<div class="messaging">
		  <div class="inbox_msg">
			<div class="inbox_people">
			  <div class="headind_srch">
				<div class="recent_heading">
				  <h4>Recent</h4>
				</div>
				<div class="srch_bar">
				  <div class="stylish-input-group">
					<input type="text" class="search-bar"  placeholder="Search" >
				</div>
				</div>
			  </div>
			  <div class="inbox_chat">
              
              <ul id="users">
              @foreach($orders as $key=> $order)
				<div class="chat_list active_chat">
				  <div class="chat_people">
					<!-- <div class="chat_img"> <img src="./img/k.jpeg" alt="Usman" style="border-radius:10%;"> </div> -->
					<div class="chat_ib">
                    <li><span class="label label-info">{{$order->renteruser->name}}</span> <a href="javascript:void(0);" class="chat-toggle" data-id="{{$order->renteruser->id}}" data-user="{{$order->renteruser->name}}">Open chat</a></li>
					  
					</div>
				  </div>
				</div>
                @endforeach
                </ul>
                
                 <!-- <p>No users found! try to add a new user using another browser by going to
                  <a href="{{ url('register') }}">Register page</a></p>
                 -->
				
			  </div>
			</div>
			<!-- <div class="mesgs">
			  <div class="msg_history">
				<div class="incoming_msg">
				  <div class="incoming_msg_img"> <img src="./img/k.jpeg" alt="usman" style="border-radius: 10%;"> </div>
				  <div class="received_msg">
					<div class="received_withd_msg">
						<p>Rent Karo Save Karo.</p>
					  <span class="time_date"> 11:01 AM    |    June 9</span></div>
				  </div>
				</div>
				<div class="outgoing_msg">
				  <div class="sent_msg">
					<p>Rent Karo Save Karo.</p>
					<span class="time_date"> 11:01 AM    |    June 9</span> </div>
				</div>
				<div class="incoming_msg">
				  <div class="incoming_msg_img"> <img src="./img/k.jpeg" alt="Usman" style="border-radius: 10%;"> </div>
				  <div class="received_msg">
					<div class="received_withd_msg">
						<p>Rent Karo Save Karo.</p>
					  <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
				  </div>
				</div>
				<div class="outgoing_msg">
				  <div class="sent_msg">
					<p>Rent Karo Save Karo.</p>
					<span class="time_date"> 11:01 AM    |    Today</span> </div>
				</div>
				<div class="incoming_msg">
				  <div class="incoming_msg_img"> <img src="./img/k.jpeg" alt="Usman" style="border-radius: 10%;"> </div>
				  <div class="received_msg">
					<div class="received_withd_msg">
						<p>Rent Karo Save Karo.</p>
					  <span class="time_date"> 11:01 AM    |    Today</span></div>
				  </div>
				</div>
			  </div>
			  <div class="type_msg">
				<div class="input_msg_write">
				  <input type="text" class="write_msg" placeholder="Type a message" />
				  <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
				</div>
			  </div>
			</div> -->
		  </div>		  	  
		</div>
        @include('chat-box')
            
            <input type="hidden" id="current_user" value="{{ \Auth::user()->id }}" />
            <input type="hidden" id="pusher_app_key" value="{{ env('PUSHER_APP_KEY') }}" />
            <input type="hidden" id="pusher_cluster" value="{{ env('PUSHER_APP_CLUSTER') }}" />
         @section('script')
            <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
            <script src="{{ asset('public/js/chat.js') }}"></script>
        
        @stop
        <style>
		.bg-img {
		  background-color: #F8694A;
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		  position: relative;
		}
		
		.containerclass {
		  background-color: white;
		  opacity: 0.95;
		  height: 1300px;
		  margin-top: 50px;
		  margin-bottom: 50px;
		}
	</style>
	<style>
		input[type="file"] {
		display: none;
		}
		.custom-file-upload {
		border: 1px solid #ccc;
		display: inline-block;
		padding: 6px 12px;
		cursor: pointer;
		width:49.5%;
		text-align: center;
		}
	</style>
	<style>
img{ max-width:100%;}
.inbox_people {
  background: #f8f8f8 none repeat scroll 0 0;
  float: left;
  overflow: hidden;
  width: 40%; border-right:1px solid #c4c4c4;
}
.inbox_msg {
  border: 1px solid #c4c4c4;
  clear: both;
  overflow: hidden;
}
.top_spac{ margin: 20px 0 0;}


.recent_heading {float: left; width:40%;}
.srch_bar {
  display: inline-block;
  text-align: right;
  width: 60%; padding:
}
.headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

.recent_heading h4 {
  color: #F8694A;
  font-size: 21px;
  margin: auto;
}
.srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
.srch_bar .input-group-addon button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  padding: 0;
  color: #707070;
  font-size: 18px;
}
.srch_bar .input-group-addon { margin: 0 0 0 -27px;}

.chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
.chat_ib h5 span{ font-size:13px; float:right;}
.chat_ib p{ font-size:14px; color:#989898; margin:auto}
.chat_img {
  float: left;
  width: 11%;
}
.chat_ib {
  float: left;
  padding: 0 0 0 15px;
  width: 88%;
}

.chat_people{ overflow:hidden; clear:both;}
.chat_list {
  border-bottom: 1px solid #c4c4c4;
  margin: 0;
  padding: 18px 16px 10px;
}
.inbox_chat { height: 550px; overflow-y: scroll;}

.active_chat{ background:#ebebeb;}

.incoming_msg_img {
  display: inline-block;
  width: 6%;
}
.received_msg {
  display: inline-block;
  padding: 0 0 0 10px;
  vertical-align: top;
  width: 92%;
 }
 .received_withd_msg p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: #646464;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.time_date {
  color: #747474;
  display: block;
  font-size: 12px;
  margin: 8px 0 0;
}
.received_withd_msg { width: 57%;}
.mesgs {
  float: left;
  padding: 30px 15px 0 25px;
  width: 60%;
}

 .sent_msg p {
  background: #F8694A none repeat scroll 0 0;
  border-radius: 3px;
  font-size: 14px;
  margin: 0; color:#fff;
  padding: 5px 10px 5px 12px;
  width:100%;
}
.outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
.sent_msg {
  float: right;
  width: 46%;
}
.input_msg_write input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
  color: #4c4c4c;
  font-size: 15px;
  min-height: 48px;
  width: 100%;
}

.type_msg {border-top: 1px solid #c4c4c4;position: relative;}
.msg_send_btn {
  background: #F8694A none repeat scroll 0 0;
  border: medium none;
  border-radius: 50%;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  height: 33px;
  position: absolute;
  right: 0;
  top: 11px;
  width: 33px;
}
.messaging { padding: 0 0 50px 0;}
.msg_history {
  height: 516px;
  overflow-y: auto;
}
	</style>


@include('shared.footer')
@endsection
