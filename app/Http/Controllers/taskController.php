<?php

namespace App\Http\Controllers;
use Crypt;
use Illuminate\Http\Request;
use App\Models\register;
class taskController extends Controller
{
    function regform(){
        return view('regform');
    }
    function login(){
        return view('login');
    }
    function reg_valid(Request $req){
        $validd=$req->validate(['username'=>'required|min:6',
        'email'=>'required|email|unique:registers',
        'password'=>('required|min:8|max:12')]);
        if($validd){
        $data= new register;
        $data->username=$req->username;
        $data->email=$req->email;
        $data->password=Crypt::encrypt($req->password);
        $data->save();
        return redirect('login');
        }
    }
    function login_valid(Request $req){
        $valid=$req->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:12']);
            if($valid){
                $user=register::where('email','=',$req->email)->first();
                if($user){
                    $x=($req->password);
                    $y=Crypt::decrypt($user->password);
                    if($x==$y){
                        $store=register::all();
                        return view('table',['data'=>$store]);
                    }
                    else{
                        return redirect("/login")->with("status","Incorrect password");
                   }
                }
                else{
                    return redirect("/login")->with("status","Invalid email");
                }
            }
    }
}
