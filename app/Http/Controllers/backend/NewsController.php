<?php

namespace App\Http\Controllers\backend;

use App\Models\Logo;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class NewsController extends Controller
{
    public function GoAdd_News(){
        $header_logo = Logo::orderBy('id','desc')->first();

        if(empty($header_logo)){
            $header_logo = new Logo();
        }
        return view('backend.add_news',compact('header_logo'));

    }
    public function View_News(){
        $news = News::all();
        $header_logo = Logo::orderBy('id','desc')->first();
        if(empty($header_logo)){
            $header_logo = new Logo();
        }

        if(empty($news)){
            $news = new News();
        }

        return view('backend.view_news',compact('news','header_logo'));
    }
    public function Add_News(Request $request){

            $cover = $request->file("cover");
            $new_cover = time().'-'.$cover->getClientOriginalName();
            $path = "assets/News";

            $cover->move($path, $new_cover);




        $News = News::create([
            "title"=>$request->title,
            "descriptions"=>$request->description,
            "cover"=>$new_cover,

        ]);


        return redirect('/dashboard/view_News')->with('add_success','');
    }
    public function Delete_News(Request $request){
        $d_News = News::find($request->remove_id)->delete();

        return redirect('/dashboard/view_News')->with('delete_success','');
    }
    public function Update_News(Request $request){
        if(!empty($request->file("cover"))){
            $cover = $request->file("cover");
            $new_cover = time().'-'.$cover->getClientOriginalName();
            $path = "assets/News";

            $cover->move($path, $new_cover);
        }else{
            $new_cover = $request->old_cover;
        }

        $U_News = News::find($request->news_id)->update([
            "title"=>$request->title,
            "cover"=>$new_cover,
            "description"=>$request->description,
        ]);

        return redirect('/dashboard/view_News')->with('update_success','');
    }

    public function GoUpdate_News($id){
        $header_logo = Logo::orderBy('id','desc')->first();
        $news = News::find($id);

        if(empty($header_logo)){
            $header_logo = new Logo();
        }
        return view('backend.update_news',compact('header_logo','news'));
    }
}
