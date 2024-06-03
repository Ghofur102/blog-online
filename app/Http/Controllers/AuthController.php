<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function signUp_process(Request $request){

        $request->validate([
            'username' =>'required',
            'email' =>'required',
            'password' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' =>Hash::make($request->password)

        ]);

        return redirect()->route('login')->with('success', 'signed up successfully');

        }

    public function signIn_process(Request $request){

        $request->validate([
            'email' =>'required|email',
            'password' => 'required|min:8'
        ]);

        $data=[
            'email' =>$request->email,
            'password' =>$request->password
        ];
        if(Auth::attempt($data)){
            return redirect()->route('/')->with('success', 'signed in successfully');
          }else{
            return redirect()->back()->with('error','Your email or password is incorrect!');
          }
    }

    public function logout_process(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('/')->with('success', 'logged out successfully');
    }
}
