@extends('layouts.rentee')
      @section('content')
      <div class="content-wrapper" style="min-height: 141.81px;">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
      <div class="row" >
        <div class="col-md-12">
          <div class="card card-secondary">
            <div class="card-header">
            <h3 class="card-title">Customer Detail : <strong >{{$order->user->name}}</strong>
               <strong style="padding-left:150px!important;"></strong>
              </h3>
        

              
            </div>
            <div class="card-body">
            
             
              <div class="form-group">
                <label for="inputName">Phone</label>
                <p>{{$order->user->phone}}</br>
                </p>
              </div>

              <div class="form-group">
                <label for="inputName">Address</label>
                <p>{{$order->country}} {{$order->city}} zipcode({{$order->zipcode}}) {{   $order->user->address}}</br>
                </p>
              </div>
              
             
            </div>
          
          </div> 
       
        </div>
        <div class="col-md-6">
          <div class="card card-secondary" style="display:none">
            <div class="card-header">
              <h3 class="card-title">Time Line</h3>

              <!-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div> -->
            </div>
          <div class="card-body">
           <form method="POST" action="{{route('order.status',$order->id)}}"> 
            @csrf
      
              <div class="form-group">
                  <label for="inputStatus">Status</label>
                  <select name="status" class="form-control custom-select">
                    <option selected disabled>Select one</option>
                    <option value="Return">Return</option>
                   
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputDescription"> Description</label>
                  <textarea name="description" id="inputDescription" class="form-control" rows="4"></textarea>
                </div>
                <div style="margin-bottom: 15px; margin-right: 10px;">
                  <input type="submit" value="Submit" class="btn btn-success float-right">
               </div>
            </form>
            </div>
            
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      
        <div class="col-md-12">
          <div class="card card-secondary" >
            <div class="card-header">
              <h3 class="card-title">Item Detail</h3>
            </div>
           
            <div class="card-body d-flex justify-content-between">
            <div>
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <p>{{$order->orderItems->title}}</p>
                    <img  src="{{ URL::to('/') }}/public/front-end/img/{{ $order->orderItems->image }}" 
                    class="img-thumbnail"   width="100"/>
                </div>
                <div class="form-group">
                    <label for="inputDescription">Qty</label>
                    <p>{{$order->orderitems->qty}}</p>
                </div>
                <div class="form-group">
                    <label for="inputDescription">Per_Day_Cost</label>
                    <p>Rs. {{$order->orderItems->per_day_cost}}</p>
                </div>
                <!-- <div class="form-group">
                    <label for="inputClientCompany">Details</label>
                  
                </div> -->
             </div> 
            <div>
               
                
               
           
           
          </div>
        </div>

      </div>
      <!-- <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Porject" class="btn btn-success float-right">
        </div>
      </div> -->
    </section>
   
    <!-- /.content -->
  </div>
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