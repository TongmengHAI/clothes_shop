<?php

namespace App\Http\Controllers\backend;

use App\Models\Logo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function Dashboard(){


        $header_logo = Logo::orderBy('id','desc')->first();

        if(empty($header_logo)){
            $header_logo = new Logo();
        }
        return view("backend.master",compact('header_logo'));
    }




}
