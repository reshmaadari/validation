<?php

namespace App\Http\Controllers;
use Crypt;
use DB;
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
            $req->session()->put('register',$valid);
            if($valid){
                $user=register::where('email','=',$req->email)->first();
                $z=$user->username;
                if($user){
                    $x=($req->password);
                    $y=Crypt::decrypt($user->password);
                    if($x==$y){
                        $req->session()->put('username',$z);
                        return redirect('dashboard');
                        // $store=register::all();
                        // return view('dashboard',['data'=>$store]);
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
    function list(){
        $users = DB::select('select * from registers');
        return view('table',['userss'=>$users]);
    }
    function checkage(Request $req){
        $a=$req->age;
        $req->session()->put('age',$a);
        return redirect('access');
    }
    
}
