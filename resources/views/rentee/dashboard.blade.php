      @extends('layouts.rentee') 
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
                        <img src="{{asset('public/front-end/img/File-1600946188.jpg')}}"   height="550">
                        <div class="carousel-caption">
                            <!-- <h1 style="color: #F8694A;">Women Dress</h1> -->
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('public/front-end/img/x.png')}}" alt="Chicago" width="1100" height="550">
                        <div class="carousel-caption">
                            <!-- <h1 style="color: #F8694A;">Gaming Equipments</h1> -->
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('public/front-end/img/xx.jpg')}}" alt="New York" width="1100" height="550">
                        <div class="carousel-caption">
                            <!-- <h1 style="color: #F8694A;">Electronics </h1> -->
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('public/front-end/img/eew.jpg')}}" alt="Chicago" width="1100" height="550">
                        <div class="carousel-caption">
                            <!-- <h1 style="color: #F8694A;">Baby Products </h1> -->
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('public/front-end/img/Nook-696x392.jpg')}}" alt="New York" width="1100" height="550">
                        <div class="carousel-caption">
                            <!-- <h1 style="color: #F8694A;">Crockery </h1> -->
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('public/front-end/img/4-Balance.jpg')}}" alt="New York" width="1100" height="550">
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

                    <a class="btn btn-primary" href = "{{route('rentee.edit', Auth::user()->id)}}">
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
                            <a href="{{route('RenteeUsers')}}" style="padding-left: 150px;">
                                View all
                            </a>
                        </div>
                        <div class="card-body">
                            <b>Easy Stationary</b><br>
                           <a href="{{route('RenteeUsers')}}">Starting Chat with Owner</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">My Products
                            <!-- <a href="#" style="padding-left: 500px;">
                                View all
                            </a> -->
                        </div>
                        <div class="card-body">
                        @foreach ($orderitems as $key=> $item)
                            <img  src="{{ URL::to('/') }}/public/front-end/img/{{ $item->image }}"style="width: 53px;border-radius: 100%;">
                            <span style="padding-left: 10px;"><b>{{$item->title}}</b></span>
                            <!-- <a href="return.html">
                                <button type="submit" class="btn btn-sm" style="background-color:#F8694A;color: white;margin-left: 20px;">Return</button>
                            </a> -->
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         @endforeach
                            
                        </div>
                      </div>
                </div>
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
                                  
                                </tr>
                            </thead>
                           
                            <tbody>
                            @foreach($orders as $key=> $order)
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
                                    
                                    <td><a href="{{route('order.detailview',$order->id)}}" 
                                     class="btn btn-primary">detail view</a></td> 
                                    
                                   

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