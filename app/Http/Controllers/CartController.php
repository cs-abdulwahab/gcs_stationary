<?php

namespace App\Http\Controllers;
use Notification;
use App\Notifications\StatusUpdate;
use Illuminate\Notifications\Notifiable;
use App\Mail\DilljabaEmail;
use Illuminate\Support\Facades\Mail;



use Illuminate\Http\Request;
use App\Product;
use App\CartItem;
use App\Order;
use Auth;
use DB;
use session;
use App\OrderItem;
use App\CustomerDetail;
use Validator;
use Redirect;

class CartController extends Controller
{
    public function cart( )
    {
        $user=Auth::User();
        // dd($user)
        $cart=DB::table('cart_items')
        ->join('products','products.id', "=", 'cart_items.product_id')
        ->select('products.*', 'cart_items.*')
        ->where('user_id',$user->id)
        ->get();
    //    dd($cart);
        return view('cart',compact('cart'));
    }
    public function addToCart($id){
      
        
        $user=Auth::User();
        $usertype=$user->usertype;
        // dd($usertype);
        if($usertype == 'rentee'){
        $item=Product::find($id);    
        $userid=$user->id;    
        $cartitem=CartItem::where('product_id' , $item->id)
        ->where('user_id',$userid)
        ->first();
        if($cartitem) {
         $cartitem->qty = $cartitem->qty +1;
          }
        else {
           $cartitem= new CartItem();
           $cartitem->user_id=$userid;
           $cartitem->created_by=$item->created_by;
           $cartitem->title=$item->title;
           $cartitem->product_id=$item->id;
           $cartitem->product_brand=$item->product_brand;
           $cartitem->description=$item->description;
           $cartitem->feature=$item->feature;
           $cartitem->age_group=$item->age_group;
           $cartitem->per_day_cost=$item->per_day_cost;
           $cartitem->per_weak_cost=$item->per_day_cost;
           $cartitem->per_month_cost=$item->per_day_cost;
           $cartitem->image=$item->image;
           $cartitem->qty =1;
           $cartitem->security_cost=$item->security_cost;
           $cartitem->rule_while_using=$item->rule_while_using;
           $cartitem->term_condition=$item->term_condition;
           $cartitem->required_document=$item->required_document;
           $cartitem->usage_policy=$item->usage_policy;
           $cartitem->video=$item->video;
           $cartitem->product_address=$item->product_address;
          }
          $cartitem->save();
           if(!$item){
           echo"Item not available";
           }
           $cart = session()->get('cart');
         if(!$cart){
             $cart = [
              $id => [
             "title" => $item->title,
             "qty" => 1,
             "per_day_cost" => $item->per_day_cost,
             "per_weak_cost" => $item->per_weak_cost,
             "per_month_cost" => $item->per_month_cost,
             "image" => $item->image,
             "product_brand"  => $item->product_brand,
             "feature" => $item->feature,
             "description"   => $item->description,
             "age_group"   => $item->age_group,
             "product_address" => $item->product_address  
             ]
           ];
           session()->put('cart',$cart);
           return redirect()->back()->with('success', 'Product added to cart successfully!');
         }
          if(isset($cart[$id])) {
           $cart[$id]['qty']++;
           session()->put('cart', $cart);
           return redirect()->back()->with('success', 'Product added to cart successfully!');
       }
       $cart[$id] = [
        "title" => $item->title,
        "qty" => 1,
        "per_day_cost" => $item->per_day_cost,
        "per_weak_cost" => $item->per_weak_cost,
        "per_month_cost" => $item->per_month_cost,
        "image" => $item->image,
        "product_brand"  => $item->product_brand,
        "feature" => $item->feature,
        "description"   => $item->description,
        "age_group"   => $item->age_group,
        "product_address" => $item->product_address 
       ];
   
           session()->put('cart', $cart);    
           return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        //    if condition end
        if($usertype == 'renter'){
            return Redirect::back()->with('condition','Your are not eligible for this action because you are Owner Or Admin');

        }
      
      } 
      public function remove($id){
        $dele=CartItem::find($id)->delete();
        $value =session()->pull('cart', $id);
        // $request->session()->forget('cart');
        return redirect('/cartitem');
        }
        //delete from cart icon
        // public function deleteitem($id){
        //     Cart::remove($id);
        //     return redirect('/cartitem');
        //    }
        public function checkout(Request $request ){  
           

            // $todayDate = date('m/d/Y');
            // dd($todayDate);
             $request->validate([
                // 'rentee_start_date.*' => 'after_or_equal:'.$todayDate,
                // 'rentee_end_date.*' => 'after:'.$todayDate,
                
            ]);
            
            // dd("mmm");
            // dd($products);
            $data= $request->all();
          
           
            $user=Auth::User();
            $usertype=$user->usertype;
            if($usertype == 'rentee'){
              
            // dd($data);
            foreach($data['cart_id'] as $idx => $id){
            $item = CartItem::find($id); 
          
            $item->rentee_start_date=2020-10-20;
            $item->rentee_end_date=2020-10-20;
           
             $item->qty = $data['qty'][$idx];
             $user=Auth::User();
             $cartitems=DB::table('cart_items')
             ->join('products','products.id', "=", 'cart_items.product_id')
             ->select('products.*', 'cart_items.*')
             ->where('user_id',$user->id)
             ->get();
            //  dd($item);
             $item->save();
             return view('checkout',compact('cartitems'));

       }  
    }
    
    if($usertype == 'renter'){
        return redirect ('/products')->with('condition','Your are not eligible for this action because you are Owner Or Admin');

    }
    }  
    public function orderplace(Request $request){
                $user_id = Auth::user();

                ///for notification
            
                
                // $user_id->notify(new StatusUpdate());                //

                $items=DB::table('cart_items')
                ->join('products','products.id', "=", 'cart_items.product_id')
                ->select('products.*', 'cart_items.*')
                ->where('user_id',$user_id->id)
                ->get();
                foreach($items as $idx => $item){
                    $product_id=$item->product_id;  
                    // $company_id=$item->company_id;
                    $categoty_id=$item->category_id;
                    $name=$item->title;
                    $image=$item->image;
                    $details=$item->description;
                    $rentee_start_date=2020-10-20;
                    $rentee_end_date=2020-10-20;
                    // $type=$item->type; 
                    // $number_of_days=$item->number_of_days; 
                    $per_day_cost=$item->per_day_cost;
                    $qty=$item->qty;
                    $sub_total =($per_day_cost * $qty );

                    $customerdetail= new CustomerDetail();
                    $customerdetail->user_id=$user_id->id;
                    $customerdetail->created_by=$item->created_by;
                    $customerdetail->firstname=$request->input('firstname');
                    $customerdetail->lastname=$request->input('firstname');
                    $customerdetail->gmail=$request->input('gmail');
                    $customerdetail->address=$request->input('address');
                    $customerdetail->city=$request->input('city');
                    $customerdetail->country=$request->input('country');
                    $customerdetail->zipcode=$request->input('zipcode');
                    $customerdetail->phone=$request->input('phone');
                    $customerdetail->save();

                    $order= new Order();
                    $order->user_id=$user_id->id;
                    $order->customer_id=$customerdetail->id;
                    $order->created_by=$item->created_by;
                    $order->usertype=$user_id->usertype;
                    $order->sub_total=$sub_total;
                    $order->net_total=$sub_total;
                    $order->city=$request->input('city');
                    $order->country=$request->input('country');
                    $order->zipcode=$request->input('zipcode');
                    $order->status='Processing';
                    // dd('done');
                    $order->save();
                   
                    
                    $orderitem= new OrderItem();
                    
                    // dd($orderitems);

                    $orderitem->order_id=$order->id;
                    $orderitem->user_id=$user_id->id;
                    $orderitem->category_id=$categoty_id;
                    $orderitem->product_id=$product_id;
                    $orderitem->created_by=$item->created_by;
                    // dd('kkk');
                     $orderitem->title =$name;
                     $orderitem->qty = $qty;
                     
                     $orderitem->product_brand = $item->product_brand;
                     $orderitem->description =$details;
                     $orderitem->feature = $item->feature;
                     $orderitem->age_group =$item->age_group;
                     $orderitem->per_day_cost = $per_day_cost;
                     $orderitem->per_weak_cost = $item->per_weak_cost;
                     $orderitem->per_month_cost = $item->per_month_cost;
                     $orderitem->security_cost = $item->security_cost;
                     $orderitem->rentee_start_date =2020-10-20;
                     $orderitem->rentee_end_date = 2020-10-20;
                     $orderitem->status = $order->status;
                    //  $orderitem->term_condition = $item->term_condition;
                    //  $orderitem->required_document= $item->required_document;
                     $orderitem->image= $item->image;
                     $orderitem->net_total=0;
                     $orderitem->save();
                     $request->session()->forget('cart');
                     CartItem::truncate();
                     
                     return redirect('/products')->with('success','Your order received successfully');
    }  
    } 
}

