<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;


class APIController extends Controller
{
    public function formatToJSON($data){
        $response = [
            "code"=> 200,
            "data"=> $data,
        ];
        return $response;
    }
    public function getLogo(){

        $logo = Logo::all();

        return $this->formatToJSON($logo);
    }
    public function addLogo(Request $request){
        $logo = $request->add_logo;

        if($logo){
            $new_logo = time() .".". $logo->getClientOriginalName();
            $path ='assets/logo';
            $logo->move($path, $new_logo);

        }
        $add_logo = Logo::create([
            'thumbnail'=> $new_logo,
        ]);

        return  $this->formatToJSON('Insert logo success');

    }
    public function updateLogo(Request $request){

        $logo = $request->add_logo;
        $id = $request->id_logo;

        if($logo){
            $new_logo = time() .".". $logo->getClientOriginalName();
            $path ='assets/logo';
            $logo->move($path, $new_logo);

        }
        $update_logo = Logo::where('id', $id)->update([
            'thumbnail'=> $new_logo,

        ]);

        return $this->formatToJSON('Update Logo Success');

    }
    public function deleteLogo(Request $request){
        $id = $request->id_logo;

        $delete_logo = Logo::where('id', $id)->delete();

        return $this->formatToJSON('Delete logo success');
    }
}
