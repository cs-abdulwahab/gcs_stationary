<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Favourit;
use App\Review;
use Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
// use willvincent\Rateable\Rateable;

class ProductController extends Controller
{
    public function index(){
        $user=Auth::user();
        if ($user->usertype == 'renter') {
        $products = Product::where('created_by',$user->id)->paginate(15);
        }
        // dd($products);
         return view('renter.viewallposts',compact('products'));
    }
    public function create(){
        $categories = Category::with('children')->whereNull('parent_id')->get();
        // $product = Product::pluck('title');

        // dd($categories);
        return view('renter.uploadproduct',compact('categories'));
    }
    public function store(Request $request)
    
    { 
        $day=$request->per_day_cost;
        $weak=$request->per_weak_cost;
        $month=$request->per_month_cost;
        // if($day>$weak){
        //     return Redirect::back()->with('validation1','Error!The Per Day Cost  should be less than Per
        //      Weak cost ')->withInput();
        // }
        // if($day>$month){
        //     return Redirect::back()->with('validation2','Error!The Per Day Cost  should be less than 
        //      Per Month Cost')->withInput();
        // }
        // if($weak>$month){
        //     return Redirect::back()->with('validation3','Error!The Per Weak Cost  should be less than 
        //      Per Month Cost')->withInput();
        // }
        // $request->validate([
        //     // 'per_day_cost' => 'numeric|max:$weak|max:$month',
        //     // 'per_weak_cost' => 'numeric|min:2|min:$day|max:$month',
        //     // 'per_month_cost' => 'numeric|min:3|min:$day|min:$weak|',
            
        // ]);
        
     

        $file=request('image');
        $azeem=rand().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('front-end/img'),$azeem);

        // $file=request('video');
        // $azeemm=rand().'.'.$file->getClientOriginalExtension();
        // $file->move(public_path('front-end/video'),$azeemm);

        $product = new Product;
        $product->category_id = $request->category_id;
        $user=Auth::user();
        $product->created_by = $user->id;
       // dd($request);
        $product->title = $request->title;
        $product->qty = $request->qty;
        $product->product_brand = $request->product_brand;
        $product->description = $request->description;
        $product->feature = $request->feature;
        $product->age_group = $request->age_group;
        $product->per_day_cost = $request->per_day_cost;
        $product->per_weak_cost = 22;
        $product->per_month_cost = 22;
        $product->security_cost = 22;
        $product->rule_while_using = $request->rule_while_using;
        $product->term_condition = $request->term_condition;
        $product->required_document= 'Good';
        // dd($product);
        $product->usage_policy = 'Good';
        $product->image=$azeem;
        // $product->video=$azeemm;
       
        $product->product_address = $request->product_address;
        // dd($product);
        $product->save();
        
         return redirect('product')->with('done','Product Added successfully');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $product = Product::find($id);
    //    dd($id);
          return view('renter.productedit',compact('product','categories'));

    }
    public function update(Request $request, $id)
    {
        $day=$request->per_day_cost;
       
       
       
      
        $validatedData = $this->validate($request, [
            
            'category_id'   => 'required|numeric',
           
        ]);
        // dd($request);
        $file=request('image');
        $azeem=rand().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('front-end/img'),$azeem);

       
        
        $product= Product::find($id);
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->qty = $request->qty;
        $product->product_brand = $request->product_brand;
        $product->description = $request->description;
        $product->feature = $request->feature;
        $product->age_group = $request->age_group;
        $product->per_day_cost = $request->per_day_cost;
        $product->per_weak_cost = 22;
        $product->per_month_cost = 22;
        $product->security_cost = 33;
        $product->rule_while_using = $request->rule_while_using;
        $product->term_condition = $request->term_condition;
        $product->required_document= 'jjjj';
        // dd($product);
        $product->usage_policy = 'kkkkkk';
        $product->image=$azeem;

        $product->product_address = 'ggggg';
        $product->save();
  
    
        return redirect('product')->with('success','Product Updated Successfully');
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
         return redirect('product') ->with('delete','Product Deleted successfully');
    
    }
    public function StoreReviewProduct(Request $request)
    {
    
        $addreview = new Review;
        $addreview->product_id=$request->product_id;
        // dd($request->product_id);
        $addreview->person_name=$request->person_name;
        $addreview->person_email=$request->person_email;
        $addreview->notes=$request->notes;
        // $rating = new \willvincent\Rateable\Rating;
        $addreview->rating = $request->rating;
        // dd($addreview);
        $addreview->save();
        // $product = Product::find($request->product_id);
        // // dd($product);
        // $product->rating=$request->rating;
       
        // $product->save();
        
        Session::flash('success','thanks for adding review!');
        return redirect()->back();
    }
    public function checkReview($id){
        $review=Review::find($id);
        return view('renter.rating',compact('review'));
    }

    public function favouritItem(Request $request){
        $user=Auth::user();
        // dd($request->product_id);
        $value=$request->product_id;
        $products=Product::find($request->product_id);
        // if($value=='new'){     
        $favourit= new Favourit;
        $favourit->product_id=$request->product_id;
        $favourit->user_id=$user->id;
        $favourit->title=$products->title;
        $favourit->per_day_cost=$products->per_day_cost;
        $favourit->img=$products->image;
        $favourit->save();
        // }
        //   else{
        //     $favourit=Favourit::find($value);
        //     $favourit->product_id=$request->product_id;
        //     $favourit->user_id=$user->id;
        //     $favourit->title=$products->title;
        //     $favourit->per_day_cost=$products->per_day_cost;
        //     $favourit->img=$products->image;
        //     $favourit->save();    

        // }
        // dd($favourit);
        return redirect()->back()->with('favourit','Product Added to favourit successfully');
    }
    public function userFavourit(){
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $user=Auth::user();
        $productsfavourits=Favourit::where('user_id',$user->id)->get();
        // dd($productsfavourits);
        return view('favourit',compact('productsfavourits','categories'));
    }
}
