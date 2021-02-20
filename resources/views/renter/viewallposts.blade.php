@extends('layouts.renter')
@section('content')
<main style="margin-top: 20px;" class="container-fluid">
    @if (session('success'))
    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong> {{ session('success') }} </strong>
    </div>
    @endif
    @if (session('delete'))
    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong> {{ session('delete') }} </strong>
    </div>
    @endif
    @if (session('done'))
    <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong> {{ session('done') }} </strong>
    </div>
    @endif
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Products</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Qty</th>
                            <th>Product Brand</th>
                            <th>Description</th>
                            <th>Feature</th>

                            <th> Cost</th>

                            <th>Rule While Using</th>
                            <th>Term Condition</th>

                            <th>Image</th>


                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($products as $key=> $product)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->qty}}</td>
                            <td>{{$product->product_brand}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->feature}}</td>
                            
                            <td>{{$product->per_day_cost}}</td>

                            <td>{{$product->rule_while_using}}</td>
                            <td>{{$product->term_condition}}</td>

                          
                            <td> <img src="{{ URL::to('public/front-end/img/'.$product->image)}}" width=120px class="img-responsive" alt="--"></td>

                          
                            <td class="d-flex">
                                <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary">
                                    Edit
                                </a>

                                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
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