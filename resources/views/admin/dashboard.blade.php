@extends('layouts.admin')
@section('content')
<div class="row" style="padding-top: 60px;">
            <div class="col-md-11 offset-1">
                <div id="layoutSidenav">
                    <div>
                        <main>
                            <div class="container-fluid">
                                <ol class="breadcrumb mb-4 mt-4">
                                    <li class="breadcrumb-item active">
                                        Welcome <a href="#">  {{ Auth::user()->name }} </a>
                                    </li>
                                </ol>
                            </div>
                        </main>
                        @if (session('update'))
                    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong> {{ session('update') }} </strong>
                    </div>
                        @endif

                        <main>
                            <div class="container-fluid">
                            <div class="breadcrumb">
                    <img src="{{asset('public/front-end/img/vector.jpg')}}" style="width: 100px;border-radius: 100%;">
                   
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

                    <a class="btn btn-primary" href = "{{route('admin.edit', Auth::user()->id)}}">
                         Edit
                    </a>
                        
                    </div>
                </div>
                            </div>
                        </main>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Chart Demo</div>

                                <div class="panel-body">
                                    {!! $chart->html() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Charts::scripts() !!}
                 {!! $chart->script() !!}

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Chart Demo</div>

                                <div class="panel-body">
                                    {!! $renteechart->html() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Charts::scripts() !!}
                 {!! $renteechart->script() !!}
                            
                        
                        
                        <main class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">My Inbox
                                            <a href="{{route('mychat.inbox')}}" style="padding-left: 170px;">
                                                View all
                                            </a>
                                        </div>
                                        <div class="card-body"><a href="{{route('mychat.inbox')}}"> Click To Chat With Users</a></div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">My Posting
                                            <a href="#" style="padding-left: 160px;">
                                                View all
                                            </a>
                                        </div>
                                        <div class="card-body">Welcome to RENT-KRO</div>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">My Rental
                                            <a href="#" style="padding-left: 160px;">
                                                View all
                                            </a>
                                        </div>
                                        <div class="card-body">Welcome to RENT-KRO</div>
                                    </div>
                                </div>
                            </div>
                        </main>
                        <main style="margin-top: 20px;" class="container">
                            <div class="card mb-4">
                                <div class="card-header"><i class="fas fa-table mr-1"></i>Orders</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                <th>Order_Id</th>
                                                <th>Rentee Name</th>
                                                 <th>Product Name</th> 
                                                <th>Image</th>
                                                <!-- <th>Per_Day_Cost</th>
                                                <th>Qty</th>
                                                <th>Total</th>
                                                <th>Security_Cost</th>
                                            
                                                <th>Net_Total</th> -->
                                                <!-- <th>Rentee_Start_Date</th>
                                                <th>Rentee_End_Date</th> 
                                             -->
                                                
                                                <th>Status</th>
                                                <!-- <th>Description</th> -->
                                               

                                                
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                            @foreach($orders as $key=> $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->user->name}}</td>
                                                <td>{{$order->orderItems->title}}</td>
                                                <td><img src="{{ URL::to('/') }}/public/front-end/img/{{ $order->orderItems->image }}"
                                                class="img-thumbnail"   width="200"/></td>
                                                <!-- <td>{{$order->orderItems->per_day_cost}}</td>
                                                <td>{{$order->orderItems->qty}}</td>
                                                <td>{{$order->orderItems->per_day_cost * $order->orderItems->qty }}</td>
                                                <td>{{$order->orderItems->security_cost}}</td> 
                                             -->

                                                <!-- <td>{{$order->orderItems->rentee_start_date}}</td>
                                                <td>{{$order->orderItems->rentee_end_date}}</td> -->
                                                

                                            
                                                <td>{{$order->status}}</td>
                                                <td>{{$order->description}}</td>
                                               
                                                
                                               
                                                
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
                    </div>
                </div>
            </div>
        </div>
       
@endsection        