<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\ProductGallery;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    public function index(){
        $categories=Category::all();
        $products=Product::all();
        return view('frontend.index',[
            'categories'=>$categories,
            'products'=>$products
        ]);
    }
    public function about(){
        return view('frontend.about');
    }
    public function shop(){
        return view('frontend.shop');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function logins(){
        return view('frontend.frontend_login');
    }
    public function registers(){
        return view('frontend.fregister');
    }
    public function fregister_post(Request $request){
        Customer::insert([
            'fname'=>$request->fname,
            'lname'=>$request->laname,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'created_at'=>Carbon::now(),

        ]);
    }
    public function logins_post(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'

        ]);
       if(Customer::where('email',$request->email)->exists()){
        if(Auth::guard('customer')->attempt(['email'=>$request->email,'password'=>$request->password])){
           return redirect()->route('index');
        }
        else{
            return back();

        }

       }
       else{

       }
    }
    public function category_product($id){
        $category_product=Product::where('category_id',$id)->get();

        return view('frontend.category_product',[
            'category_product'=>$category_product
        ]);
    }
    public function subcategory_product($id){
        $subcategory_product=Product::where('subcategory_id',$id)->get();
        $subcategory=Subcategory::find($id);

        return view('frontend.subcategory_product',[
            'subcategory_product'=>$subcategory_product,
            'subcategory'=>$subcategory,
        ]);
    }
    public function product_details($slug){
        $product_id=Product::where('slug',$slug)->first()->id;
        $product_detaials=Product::find($product_id);
        $variable_colors=Inventory::where('product_id',$product_id)->groupBy('color_id')
        ->selectRaw('count(*) as total,color_id')->get();

        return view('frontend.product_details',[
            'product_details'=>$product_detaials,
            'variable_colors'=>$variable_colors,
        ]);
    }


}
