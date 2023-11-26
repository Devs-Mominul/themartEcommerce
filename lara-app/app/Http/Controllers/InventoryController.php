<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Inventory;
use App\Models\Size;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Product;

class InventoryController extends Controller
{
    function varition(){
        $color=Color::all();
        return view('product.variation',[
            'color'=>$color
        ]);
    }
    function varition_remove($id){
        Color::find($id)->delete();
    }
    function varition_post(Request $request){
        Color::create([
            'color_name'=>$request->color_name,
            'color_code'=>$request->color_code,

        ]);
    }
    function varition_size(){
        $categories=Category::all();
        $sizes=Size::all();
        return view('product.size',[
            'categories'=>$categories,
            'sizes'=>$sizes
        ]);

    }
    function post_size(Request $request){
      Size::create([

        'size_name'=>$request->size_name,
        'category_id'=>$request->category_id,
      ]);
    }
    function delete_size($id){
        Size::find($id)->delete();
    }
    function inventory($id){
        $product=Product::find($id);
        $color=Color::all();
        $size=Size::all();
        $inventory=Inventory::where('product_id',$id)->get();
        return view('product.inventory',[
            'product'=>$product,
            'color'=>$color,
            'size'=>$size,
            'inventories'=>$inventory
        ]);
    }
    function inventory_store(Request $request,$id){
        Inventory::insert([
            'product_id'=>$id,
            'color_id'=>$request->color_id,
            'size_id'=>$request->size_id,
            'quantity'=>$request->quantity,
            'created_at'=>Carbon::now(),

        ]);

    }
}
