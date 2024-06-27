<?php

namespace App\Http\Controllers\frontend;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class viewNewsController extends Controller
{
    public function News()
    {
        $news_list = News::all();
        if(empty($news_list)){
            $news_list = new News();
        };

        return view("frontend.news",compact('news_list'));
    }
    public function NewsDetail(Request $request)
    {
        $id = $request->id;

        $news = News::find($id);
        $add_viewer = News::where('id',$id)->update(['viewer'=> ($news->viewer + 1)]);

        $news->viewer = intval($news->viewer);

        return view("frontend.news-detail",compact('news'));
    }
}
