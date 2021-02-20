@extends('layouts.site')
@section('content')
<style>
		.bg-img {
		  background-image: url("{{asset('front-end/img/latest.jpg')}}");
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		  position: relative;
		}
		
		.containerclass {
		  background-color: white;
		  opacity: 0.95;
		  height: 392px;
		  margin-top: 120px;
		  margin-bottom: 120px;
		}
        .input{
            width:100%;
        }
	</style>	

	<!-- section -->
	<div class="section bg-img">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form  method="POST" action="{{ isset($user) ? route('admin.update',$user->id) : route('user.store')}}"  id="checkout-form" class="clearfix">
                  @csrf
                  @if(isset($user))
                
                  @endif
					<div class="col-md-6 col-md-offset-3 containerclass">
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Update Your profile </h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="name" value="{{ isset($user->name ) 
                                   ? $user->name:''}}" placeholder="Name" required>
							</div>
							<div class="form-group">
								<input class="input" type="email" value="{{ isset($user->email) 
                                   ? $user->email:''}}"name="email"  placeholder="Email" required>

							</div>
                            <div class="form-group">
								<input class="input" value="{{ isset($user->phone ) 
                                   ? $user->phone:''}}" type="tel" name="phone"  placeholder="phone" required>
							</div>
							<div class="form-group">
							<input class="input"type="number" value="{{ isset($user->nic ) 
                                   ? $user->nic:''}}" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;" name="nic" placeholder="Enter NIC without dashes"  required>

							</div>
							<div class="form-group">
								<input class="input" value="{{ isset($user->address ) 
                                   ? $user->address:''}}" type="text" name="address"  placeholder="Address" required>
							</div>
							
							
							<button type="submit" class="btn btn-block" style="background-color: #F8694A;color: white;border-radius: 0;margin-top: -2px;">Update</button>
						</div>
					</div>
				</form>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->





       <main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; RENT-KRO</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
@endsection