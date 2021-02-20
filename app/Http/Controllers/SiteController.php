<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\OrderItem;
use App\Category;
use App\Contact;
use App\Review;
use DB;
use Illuminate\Support\Facades\Input;


class SiteController extends Controller
{
    public function index(){
        $products = Product::paginate(20);
        $categories = Category::with('children')->whereNull('parent_id')->get();
        // dd($categories);
        return view('products',compact('products','categories'));
    }
     public function index2(){
        $products = Product::all();
       
        $categories = Category::with('children')->whereNull('parent_id')->get();
        // dd($categories);
        return view('index',compact('categories'));
    }
    public function detail($id){
        // dd('ssss');
        $orderItems=OrderItem::all();
       
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $data=Review::where('product_id','=',$id)->get();
        // dd($data);
        $product=Product::find($id);
        // dd($product);
        // $related= Product::where('category_id', '=', $product->category->id)->where('id', '!=', $product->id)->get();
        // dd($related);
       
        // dd($product);
        return view('detail',compact('product','categories','data','orderItems'));
    }
    public function search(Request $request){

        $searchData= $request->input('search');

        //start query for search
        $categories = Category::with('children')->whereNull('parent_id')->get();
        $data = DB::table('products')
        ->where('title', 'like', '%' . $searchData . '%')
        ->get();
        // dd($data);
        return view('productSearch',compact('data','categories'));
        
    }
    public function productsCat(Request $request){

         $cat_id=$request->cat_id;
          $data=DB::table('products')
        ->where('category_id',$cat_id)
        ->get();
        
        return view('productsPage',compact('data'));
    }

    public function contactUs(Request $request){
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->notes = $request->notes;
        $contact->save();
        
        // dd($contact);
        return redirect('/')->with('success','Thanks for Contact Our Teem');

    }
}
