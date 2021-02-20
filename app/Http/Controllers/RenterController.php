<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\OrderItem;
use App\Order;
// use Validator;

use App\Product;

class RenterController extends Controller
{
    public function index(){

        //for show category name in dashboard
        $user=Auth::user();
        if ($user->usertype == 'renter') {
        $products = Product::where('created_by',$user->id)->paginate(15);
        }
        else{
            Auth::logout();
            return redirect('/');
        }
        $orders=Order::where('created_by',$user->id)
        ->get();
        $orderitems=OrderItem::where('created_by',$user->id)
        ->where('status','=','completed')
        ->get();
        // dd($orders);
        return view('renter.dashboard',compact('products','orders','orderitems'));
        // public function orders(){
        //     $orders = DB::table('orders')
        //    ->Select('users.name as username','users.id as userId',
        //    'orders.id','orders.status','orders.total','orders.created_at')
        //     ->leftJoin('users', 'users.id', 'orders.user_id')
        //     ->orderBy('orders.id','DESC')
        //     ->get();
        //     return view('admin.orders',compact('orders'));
        //   }
    }
    public function renterDetailview($id){
        $order=Order::find($id);
        // dd($order);
        return view('renter.detailview',compact('order'));
    }
    public function renterOrderstatus (Request $request,$id){
        $order=Order::find($id);
        $order->status=$request->input("status");
        $order->description=$request->input("description");
        // dd($order);
        $order->save();
        $orderitems=OrderItem::find($id);
        $orderitems->status=$request->input("status");
        $orderitems->save();
        return redirect('/renter')->with('update','Status updated successfully');

    }
    public function create(){
        return view('renter.uploadproduct');
    }
    public function edit($id)
    {
        // dd($id);
        $user = User::find($id);
          return view('renter.userform',compact('user'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|alpha','max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'phone' => 'required|regex:/(03)[0-9]{9}/',      
            'nic' => 'required', 'string','min:13',
            'address' => 'required', 'string',
            
        ]);
        $user= user::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->nic = $request->nic;
        $user->address = $request->address;
        
        $user->save();
        return redirect('renter');  
    }
    //for chat box show only rentee users
    public function RenterUsers(){

        //for show category name in dashboard
        $user=Auth::user();
       
         $orders = User::where('id', '!=', Auth::user()->id)->get();
        return view('renter.home',compact('orders'));
        
    }
   

}
