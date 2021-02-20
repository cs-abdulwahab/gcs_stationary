@extends('layouts.site')
@section('content')
<div class="section bg-img">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form id="checkout-form" class="clearfix">
					<div class="col-md-6 col-md-offset-3 containerclass" style="padding-left: 28px;">
						<div class="section-title">
							<h3 class="title">
								What is your product/listing?
							</h3>
						</div>
						<div class="row">
                    
						@foreach ($categories as $category)
							<div class="col-md-4">
								<a href="">
									<div class="btn" style="width: 150px;height: 100px;background-color: #F8694A;padding-top: 20px;">
										<h3 style="color: white; font-size: 15px;">{{ $category->name }}</h3>
											 
									</div>
								</a>
							</div>
                         @endforeach
						
							
						</div>
						<!-- <div class="row" style="padding-top: 20px;">
						
						</div> -->
						
					</div>
				</form>	
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
@endsection