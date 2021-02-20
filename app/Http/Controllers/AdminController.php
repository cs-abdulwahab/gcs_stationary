<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use Charts;
use DB;
use App\Contact;
use Auth;

class AdminController extends Controller
{
    public function index(){
        $user=Auth::user();
        if ($user->usertype == 'admin') {
        $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
                    ->where('usertype','=','renter')
    				->get();
        $chart = Charts::database($users, 'bar', 'highcharts')
			      ->title("Monthly new Register Renter Users")
			      ->elementLabel("Total Users")
			      ->dimensions(1000, 500)
			      ->responsive(false)
                  ->groupByMonth(date('Y'), true);
                  $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
                  ->where('usertype','=','rentee')
                  ->get();
      
        }
        else{
            Auth::logout();
            return redirect('/');
        }
        // dd($users);          
        $orders=Order::all();
        
    return view('admin.dashboard',compact('orders','chart','renteechart'));
    }
    public function edit($id)
    {
        // dd($id);
        $user = User::find($id);
        // dd($user);
          return view('admin.userform',compact('user'));
    }
    public function update(Request $request, $id)
    {
       
        $user= user::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->nic = $request->nic;
        $user->address = $request->address;
        
        $user->save();
        return redirect('admin')->with('update','Admin profile edit successfully');  
    }
    public function contactUserDisplay(){
        $users=Contact::all();
        return view('renter.contactusers',compact('users'));
    }
    public function destroy($id){
        $users=Contact::find($id);
        $users->delete();
        return redirect('/contactuserdisplay')->with('delete','User Deleted Successfully');
    }
    public function registerUser(){
        $users=User::all();
        $renteechart = Charts::database($users, 'bar', 'highcharts')
                ->title("Monthly new Register  Users")
                ->elementLabel("Total Users")
                ->dimensions(1000, 500)
                ->responsive(false)
                ->groupByMonth(date('Y'), true);
      
        return view('renter.registeruser',compact('users','renteechart'));
    }
    public function registerDestroy($id){
        $users=User::find($id);
        $users->delete();
        return redirect('/registeruser')->with('delete','User Deleted Successfully');
    }
}