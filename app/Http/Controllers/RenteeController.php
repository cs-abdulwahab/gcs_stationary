<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\OrderItem;
use Auth;

class RenteeController extends Controller
{
    public function index(){
        $user=Auth::user();
        if ($user->usertype == 'rentee') {
        $orders=Order::where('user_id',$user->id)->get();
        }
        else{
            Auth::logout();
            return redirect('/');
        }

       
        $orderitems=OrderItem::where('user_id',$user->id)
        ->where('status','=','completed')
        ->get();
        // dd($orderitems);
        return view('rentee.dashboard',compact('orders','orderitems'));
    }
    public function detailview($id){
        $order=Order::find($id);
        // dd($order);
        return view('rentee.detailview',compact('order'));
    }
    public function orderstatus (Request $request,$id){
        $order=Order::find($id);
        $order->status=$request->input("status");
        $order->description=$request->input("description");
        // dd($order);
        $order->save();
        $orderitems=OrderItem::find($id);
        $orderitems->status=$request->input("status");
        $orderitems->save();
        return redirect('/rentee')->with('update','Status updated successfully');

    }


    public function edit($id)
    {
        // dd($id);
        $user = User::find($id);
        // dd($user);
          return view('rentee.userform',compact('user'));
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
        return redirect('rentee');  
    }
     //for chat box show only rentee users
     public function RenteeUsers(){

        //for show category name in dashboard
        $user=Auth::user();
        if ($user->usertype == 'rentee') {
        $orders=Order::where('user_id',$user->id)->paginate(15);
        return view('rentee.home',compact('orders'));
        }
    }
   
}
