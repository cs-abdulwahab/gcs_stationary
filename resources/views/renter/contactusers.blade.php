@extends('layouts.renter')
@section('content')
<main style="margin-top: 20px;" class="container-fluid">
    
    @if (session('delete'))
    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong> {{ session('delete') }} </strong>
    </div>
    @endif
   
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Contact Us Users</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Notes</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $key => $product)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->email}}</td>
                            <td>{{$product->phone}}</td>
                            <td>{{$product->notes}}</td>


                            <td>
                                <form action="{{ route('contact.delete', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button style="height:48px;" type="submit" class="btn btn-sm btn-danger ml-2">Delete</button>
                                </form>
                                <!-- <a href = "{{route('check.review', $product->id)}}" class="btn btn-primary">
                                      Reviews
                                    </a>  -->
                            </td>
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