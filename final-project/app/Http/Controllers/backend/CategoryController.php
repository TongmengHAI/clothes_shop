<?php

namespace App\Http\Controllers\backend;

use App\Models\Logo;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function GoAdd_category(){
        $header_logo = Logo::orderBy('id','desc')->first();
        if(empty($header_logo)){
            $header_logo = new Logo();
        }
        return view('backend.add_category',compact('header_logo'));
    }
    public function View_category(){
        $category = Category::all();
        $header_logo = Logo::orderBy('id','desc')->first();
        if(empty($header_logo)){
            $header_logo = new Logo();
        }
        return view('backend.view_category',compact('category','header_logo'));
    }
    public function Add_category(Request $request){

        $category = Category::create(['name'=>$request->add_category]);

        return redirect('/dashboard/view_category')->with('add_success','');
    }
    public function Delete_category(Request $request){
        $d_category = Category::find($request->remove_id)->delete();

        return redirect('/dashboard/view_category')->with('delete_success','');
    }
    public function Update_category(Request $request){
        $U_category = Category::find($request->category_id)->update(['name'=>$request->new_category]);

        return redirect('/dashboard/view_category')->with('update_success','');
    }


}
