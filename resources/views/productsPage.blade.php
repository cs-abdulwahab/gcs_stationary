
      
@if(count($data)=="0")
        <div class="col-md-12" align="center">

            <h1 align="center" style="margin:20px">
              No products found under
              <b style="color:red"> </b>
                Category </h1>
              

        </div>
        @else

         @foreach($data as $key=> $product)
         
				<div class="col-md-3 col-sm-6 col-xs-6">
              
					<div class="product product-single">
						<div class="product-thumb">
							<a href="product-page.html">
                            
								<button class="main-btn quick-view"><i class="fa fa-search-plus"></i><a href="{{route('product.detail',$product->id)}}"> Quick view</a></button>
                            
							</a>
							<img  src="{{ URL::to('public/front-end/img/'.$product->image)}}" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">Rs.{{$product->per_day_cost}}</h3>
							<?php
							// @if($product->rating <= 0)
							// <div class="product-rating">
							//    <i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// </div>
							
							//  @elseif($product->rating == 1)
							// <div class="product-rating">
							//    <i class="fa fa-star"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// </div>
							
						
							//  @elseif($product->rating == 2)
							// <div class="product-rating">
							//    <i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// </div>
							
							// @elseif($product->rating == 3)
							// <div class="product-rating">
							//    <i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// </div>
							
							// @elseif($product->rating == 4)
							// <div class="product-rating">
							//    <i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star-o empty"></i>
							// </div>
							
							// @elseif($product->rating >=5)
							// <div class="product-rating">
							//    <i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// 	<i class="fa fa-star"></i>
							// </div>
							// @endif
							?>
                        
							<h2 class="product-name"><a href="#">{{$product->title}}</a></h2>
							<div class="product-btns">
								<!-- <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button> -->
								<div class="btn-group">
								<a href='{{url("/add/cart/".$product->id)}}' class="btn primary-btn add-to-cart sc-add-to-cart" data-name="Veg biriyani" data-price="199" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Add to Cart</a>
									<!-- <button type="button" class="btn primary-btn add-to-cart" style="background-color: #F8694A;border-radius: 0%;border: 1px solid white;">Rent</button> -->
								</div>
							</div>
						</div>
					</div>
                
				</div>
                
                @endforeach 
                @endif
                