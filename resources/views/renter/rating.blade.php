@extends('layouts.renter')
@section('content')
<main style="margin-top: 20px;" class="container-fluid">
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i> Product Reviews</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                     
                                    <th>Product _Id</th>
                                    <th>Description</th>
                                    <th>Rating</th>
                                   
                                    
                                </tr>
                            </thead>
                            
                            <tbody>
                            @if(isset($review))
                                <tr>
                                  
                                    <td>{{$review->product_id}}</td>
                                    <td>{{$review->notes}}</td>
                                    <td>{{$review->rating}}</td>
                                    
                                </tr>
                              @endif
                                
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