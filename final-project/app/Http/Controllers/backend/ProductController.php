<?php

namespace App\Http\Controllers\backend;

use App\Models\Logo;
use App\Models\Product;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function GoAdd_product(){
        $header_logo = Logo::orderBy('id','desc')->first();
        $category = Category::all('id','name');
        if(empty($header_logo)){
            $header_logo = new Logo();
        }
        return view('backend.add_product',compact('header_logo','category'));

    }
    public function View_product(){
        $product = Product::all();
        $header_logo = Logo::orderBy('id','desc')->first();
        if(empty($header_logo)){
            $header_logo = new Logo();
        }
        return view('backend.view_product',compact('product','header_logo'));
    }
    public function Add_product(Request $request){



            $thumbnail = $request->file("thumbnail");
            $new_thumbnail = time().'-'.$thumbnail->getClientOriginalName();
            $path = "assets/products";

            $thumbnail->move($path, $new_thumbnail);


        $size = $request->input('size');
        $size =    implode(',', $size);
        $product = Product::create([
            "name"=>$request->name,
            "reqular_price"=>$request->reqular_price,
            "sale_price"=>$request->sale_price,
            "thumbnail"=>$new_thumbnail,
            "color"=>$request->color,
            "size"=>$size,
            "description"=>$request->description,
            "category_id"=>$request->category_id,
            "author"=> $request->author,
        ]);


        return redirect('/dashboard/add_product')->with('add_success','');
    }
    public function Delete_product(Request $request){
        $d_product = Product::find($request->remove_id)->delete();

        return redirect('/dashboard/view_product')->with('delete_success','');
    }
    public function Update_product(Request $request){
        if(!empty($request->file("thumbnail"))){
            $thumbnail = $request->file("thumbnail");
            $new_thumbnail = time().'-'.$thumbnail->getClientOriginalName();
            $path = "assets/products";

            $thumbnail->move($path, $new_thumbnail);
        }else{
            $new_thumbnail = $request->old_thumbnail;
        }

        $size = $request->input('size');
        $size =    implode(',', $size);
        $U_product = Product::find($request->product_id)->update([
            "name"=>$request->name,
            "reqular_price"=>$request->reqular_price,
            "sale_price"=>$request->sale_price,
            "thumbnail"=>$new_thumbnail,
            "color"=>$request->color,
            "size"=>$size,
            "description"=>$request->description,
            "category_id"=>$request->category_id,
            "author"=> $request->author,
        ]);

        return redirect('/dashboard/view_product')->with('update_success','');
    }

    public function GoUpdate_product($id){
        $header_logo = Logo::orderBy('id','desc')->first();
        $category = Category::all('id','name');
        $products = Product::find($id);

        if(empty($header_logo)){
            $header_logo = new Logo();
        }
        $words = $products->size;
        $products->size = explode(',', $words);
        return view('backend.update_product',compact('header_logo','category','products'));
    }



}
