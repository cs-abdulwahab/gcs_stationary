      @extends('layouts.renter')
      @section('content')
      <main>
            <div class="container-fluid">
                <div id="demo1" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                      <li data-target="#demo1" data-slide-to="0" class="active"></li>
                      <li data-target="#demo1" data-slide-to="1"></li>
                      <li data-target="#demo1" data-slide-to="2"></li>
                      <li data-target="#demo1" data-slide-to="3"></li>
                      <li data-target="#demo1" data-slide-to="4"></li>
                      <li data-target="#demo1" data-slide-to="5"></li>
                    </ul>                                        
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('public/front-end/img/ren (1).jpg')}}" alt="Los Angeles" width="1100" height="550">
                        <div class="carousel-caption">
                            <!-- <h1 style="color: #F8694A;">Women Dress</h1> -->
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('public/front-end/img/ren (2).jpg')}}" alt="Chicago" width="1100" height="550">
                        <div class="carousel-caption">
                            <!-- <h1 style="color: #F8694A;">Gaming Equipments</h1> -->
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('public/front-end/img/ren (3).jpg')}}" alt="New York" width="1100" height="550">
                        <div class="carousel-caption">
                            <!-- <h1 style="color: #F8694A;">Electronics </h1> -->
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('public/front-end/img/ren (4).jpg')}}" alt="Chicago" width="1100" height="550">
                        <div class="carousel-caption">
                            <!-- <h1 style="color: #F8694A;">Baby Products </h1> -->
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('public/front-end/img/ren (5).jpg')}}" alt="New York" width="1100" height="550">
                        <div class="carousel-caption">
                            <!-- <h1 style="color: #F8694A;">Crockery </h1> -->
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('public/front-end/img/ren (6).jpg')}}" alt="New York" width="1100" height="550">
                        <div class="carousel-caption">
                            <!-- <h1 style="color: #F8694A;">Men Dresses </h1> -->
                          </div>
                      </div>
                    </div>                                        
                    <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo1" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </main>
        @if (session('update'))
             <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong> {{ session('update') }} </strong>
              </div>
         @endif

        <main class="mt-5">
            <div class="container-fluid">
                <div class="breadcrumb">
                    <!-- <img src="{{asset('public/front-end/img/vector.jpg')}}" style="width: 100px;border-radius: 100%;"> -->
                    <div style="margin-top: 35px;padding-left: 20px;">
                        <b>
                            Name
                            
                        </b>
                        <p>
                        {{ Auth::user()->name }} 
                        </p>
                    </div>
                    <div style="margin-top: 35px;padding-left: 60px;">
                        <b>
                            Email
                        </b>
                        <p>
                        {{ Auth::user()->email }} 
                        </p>
                    </div>
                    <div style="margin-top: 35px;padding-left: 80px;">
                        <b>
                            Phone No.
                        </b>
                        <p>
                        {{ Auth::user()->phone }} 
                        </p>
                        <b>
                            NIC.
                        </b>
                        <p>
                        {{ Auth::user()->nic }} 
                        </p>
                        <b>
                            Address.
                        </b>
                        <p>
                        {{ Auth::user()->address }} 
                        </p>
                    </div>
                    <div  style="padding-left: 250px;margin-top: 35px;">

                       
                           <a class="btn btn-primary" href = "{{route('renter.edit', Auth::user()->id)}}">
                                      Edit
                          </a>
                        
                       
                    </div>
                </div>
            </div>
        </main>
        <main class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">My Inbox
                            <a href="{{route('RenterUsers')}}" style="padding-left: 150px;">
                                View all
                            </a>
                        </div>
                        <div class="card-body">
                            <b>RENT-KRO</b><br>
                          <a href="{{route('RenterUsers')}}" > Click to Chat With Users </a>
                        </div>
                      </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">My Posting
                            <a href="{{route('product.index')}}" style="padding-left: 500px;">
                                View all
                            </a>
                        </div>
                        <div class="card-body">
                            <!-- <img src="{{asset('front-end/img/product06.jpg')}}" style="width: 53px;border-radius: 100%;"> -->
                            @foreach($products as $key=> $product)
                            <span style="padding-left: 10px;"><b>{{$product->category->name}}</b></span>
                            <a href="{{route('product.index')}}">
                                <button type="submit" class="btn btn-sm" style="background-color:#F8694A;color: white;margin-left: 20px;">Detail</button>

                            </a>   
                            @endforeach                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- <img src="{{asset('front-end/img/product07.jpg')}}" style="width: 53px;border-radius: 100%;">
                            <span style="padding-left: 10px;"><b>Electronics </b></span>
                            <a href="Order-Detail.html">
                                <button type="submit" class="btn btn-sm" style="background-color:#F8694A;color: white;margin-left: 20px;">Detail</button>
                            </a> -->
                         </div>
                      </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">My Rental
                            <!-- <a href="#" style="padding-left: 850px;">
                                View all
                            </a> -->
                        </div>
                        <div class="card-body">
                        @foreach ($orderitems as $key=> $item)
                            <img src="{{ URL::to('/') }}/public/front-end/img/{{ $item->image }}" style="width: 53px;border-radius: 100%;">
                            
                            <span style="padding-left: 10px;"><b>{{$item->title}}</b></span>
                            <!-- <a href="Order-Detail.html">
                                <button type="submit" class="btn btn-sm" style="background-color:#F8694A;color: white;margin-left: 20px;">Rent Now</button>
                            </a>
                             -->
                            
                            
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         @endforeach   
                                                </div>
                            
                      </div>
                </div>
                
                <!-- <div class="col-md-12" style="margin-top: 20px;">
                    <div class="card">
                        <div class="card-header">OrderRequest
                            <a href="#" style="padding-left: 850px;">
                                View all
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="{{asset('front-end/img/product06.jpg')}}" style="width: 53px;border-radius: 100%;">
                            
                            <span style="padding-left: 10px;"><b>Gaming Equipments</b></span>
                            <a href="Order-Detail.html">
                                <button type="submit" class="btn btn-sm" style="background-color:#F8694A;color: white;margin-left: 20px;">Process Order</button>
                            </a>
                            
                            
                            
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="{{asset('front-end/img/product07.jpg')}}" style="width: 53px;border-radius: 100%;">
                            <span style="padding-left: 10px;"><b>Electronics </b></span>
                            <a href="Order-Detail.html">
                                <button type="submit" class="btn btn-sm" style="background-color:#F8694A;color: white;margin-left: 20px;">Process Order</button>
                            </a>                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="{{asset('front-end/img/product05.jpg')}}" style="width: 53px;border-radius: 100%;">
                            <span style="padding-left: 10px;"><b>Electronics </b></span>
                            <a href="Order-Detail.html">
                                <button type="submit" class="btn btn-sm" style="background-color:#F8694A;color: white;margin-left: 20px;">Process Order</button>
                            </a>                        </div>
                            
                      </div>
                </div> -->
        
                
                
                
                
            </div>
        </main>
        
        <main style="margin-top: 20px;" class="container-fluid">
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Orders</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            
                                <tr>
                                    <th>Order_Id</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Cost</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                  
                                   
                                   
                                    
                                    <th>Status</th>
                                    <th>Description</th>

                                    <th>Action</th>
                                  
                                    <!-- <th>Product_Brand</th>
                                    <th>Usage_Policy</th>
                                    <th>Feature</th> -->
                                </tr>
                            </thead>
                           
                            <tbody>
                            @foreach($orders as $key=> $order)
                            <?php $count_orders= count($orders) ;?>
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->orderItems->title}}</td>
                                    <td><img src="{{ URL::to('/') }}/public/front-end/img/{{ $order->orderItems->image }}"
                                     class="img-thumbnail"   width="200"/></td>
                                     <td>{{$order->orderItems->per_day_cost}}</td>
                                     <td>{{$order->orderItems->qty}}</td>
                                    <td>{{$order->orderItems->per_day_cost * $order->orderItems->qty }}</td>
                                   
                                 

                                   
                                    <td>{{$order->status}}</td>
                                    <td>{{$order->description}}</td>
                                    <td><a href="{{route('renter.detailview',$order->id)}}" 
                                     class="btn btn-primary">Order Detail</a></td>
                                    
                                    <!-- <td>{{$order->orderItems->product_brand}}</td>
                                    <td>{{$order->orderItems->usage_policy}}</td>
                                    <td>{{$order->orderItems->feature}}</td> -->

                                </tr>
                            @endforeach    
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </main>
        <main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Easy Stationary</div>
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