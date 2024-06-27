<?php

namespace App\Http\Controllers\backend;

use App\Models\Logo;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function GoLogin(){
        return view('backend.login');
    }
    public function Login(Request $request){
        $this->validate($request,[
            'name_email'=>'required',
            'password'=>'required',
        ]);
        $name_email= $request->name_email;
        $password = $request->password;



        // $login = User::where('name',$name_email)
        //         ->orWhere('email',$name_email)
        //         ->where('password',$password)->first();
        // if($login){
        //     return redirect('/dashboard')->with('userID',$login->id);

        // }

        if( Auth::attempt([
            'email'=>$name_email,
            'password'=>$password,
        ])){
            return redirect('/dashboard')->with('userID','');
        }
        // $name_pwd = Auth::attempt([
        //     'name'=>$name_email,
        //     'password'=>$password,
        // ]);


        // if($email_pwd || $name_pwd){
        //     return redirect('/dashboard')->with('userID','');

        // }
        // $user = Users::where('name', $name_email)
        //         ->orWhere('email', $name_email)
        //         ->where('password', $password)
        //         ->first();

        // if ($user) {
        //     Auth::login($user);
        //     return redirect('/dashboard')->with('userID', $user->id);
        // } else {
        //     return redirect()->back()->withErrors(['credentials' => 'Invalid credentials.']);
        // }



    }
    public function GoSignup(){
        return view('backend.register');

    }


    public function Signup(Request $request){
        $this->validate($request,[
            "name"=>'required',
            'email'=>'required',
            'password'=>'required',
            'profile'=>'required'
        ]);

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $profile = $request->file('profile');

        if(!empty($profile)){
            $new_profile = time().'-'.$profile->getClientOriginalName();
            $path = 'assets/user';
            $profile->move($path, $new_profile);
        }
        $user = User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>Hash::make($password),
            'profile'=>$new_profile
        ]);

        return redirect('/login')->with('success','');
    }

    public function GoLogout(){
        $header_logo = Logo::orderBy('id','desc')->first();

        return view('backend.logout',compact('header_logo'));
    }
    public function Logout(){
        Auth::logout();

        return redirect('/login')->with('success','');

    }
}
