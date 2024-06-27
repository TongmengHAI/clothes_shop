<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function View_logo(){
        $logo = Logo::all();
        $header_logo = Logo::orderBy('id','desc')->first();
        if(empty($logo)){
            $logo = new Logo();
        }
        if(empty($header_logo)){
            $header_logo = new Logo();
        }
        return view("backend.view_logo",compact("logo",'header_logo'));
    }
    public function GoAdd_logo(){
        $header_logo = Logo::orderBy('id','desc')->first();
        if(empty($header_logo)){
            $header_logo = new Logo();
        }
        return view("backend.add_logo",compact('header_logo'));
    }
    public function Add_logo(Request $request){
        $this->validate($request,[
            "add_logo"=> "required",
        ]);
        $logo = $request->file("add_logo");

        if($logo){
            $new_logo = time() .".". $logo->getClientOriginalName();
            $path ='assets/logo';
            $logo->move($path, $new_logo);

        }

        $add_logo= Logo::create(['thumbnail'=>$new_logo]);


        if($add_logo){
            return redirect('/dashboard/view_logo')->with('success','');
        }else{
            return redirect('/dashboard/add_logo')->with('error','');
        }

    }

    public function delete_logo(Request $request){

        $d_logo = Logo::find($request->remove_id)->delete();

        return redirect('/dashboard/view_logo')->with('delete_success','');
    }
    public function upadte_logo(Request $request){
        $logo =$request->file('new_logo');

        if(!empty($logo)){
            $new_logo = time().'-'.$logo->getClientOriginalName();
            $path = 'assets/logo';
            $logo->move($path,$new_logo );

        }else{
            $new_logo =$request->old_logo;

        }
        $update_logo = Logo::find($request->update_id)->update([
            'thumbnail'=>$new_logo
        ]);

        return redirect('/dashboard/view_logo')->with('update_success','');
    }
}
