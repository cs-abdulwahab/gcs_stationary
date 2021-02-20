@extends('layouts.admin')
@section('content')
<div class="row" style="padding-top: 60px;">
            <div class="col-md-11 offset-1">
                <div id="layoutSidenav">
                    <div>
                        <main>
                            <div class="container-fluid">
                                <ol class="breadcrumb mb-4 mt-4">
                                   
                                </ol>
                            </div>
                        </main>
                        @if (session('update'))
                    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong> {{ session('update') }} </strong>
                    </div>
                        @endif

                       
                
                        
                      
                        <main style="margin-top: 20px;" class="container">
                            <div class="card mb-4">
                                <div class="card-header"><i class="fas fa-table mr-1"></i>Users</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                <th>Id</th>
                                                <th>User Name</th>
                                                 <th>User Email</th> 
                                                 <th>Phone</th> 
                                                 <th>Type</th> 
                                                 <th>Address</th> 
                                               
                                               
                                              
                                               

                                                
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                            @foreach($users as $key=> $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->usertype}}</td>
                                                <td>{{$user->address}}</td>
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