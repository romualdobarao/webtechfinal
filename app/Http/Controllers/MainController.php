<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class MainController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function registration(){
        return view("auth.registration");
    }
    
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:20'
        ]);
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $res=$user->save();
        if($res){
            return back();
        }else{
            return back();
        }
    }

    public function logInUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if($request->password == $user->password){
            return redirect('dashboard');
            }
            else{
                return back();
            }
        }
        else{
            return back();

        }
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function update(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $name = $request->input('name');
        DB::update('UPDATE users SET password=?,name=? where email = ?',[$password,$name,$email]);

        return redirect('dashboard');
    }
}