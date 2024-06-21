<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signUpLayout()
    {
        return view('auth.signup');
    }

    public function signInLayout()
    {
        return view('auth.signin');
    }


    public function signUpProcess(Request $request)
    {

        // Buat validator manual
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        // Periksa apakah validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->sendEmailVerificationNotification();

        return redirect()->route('signin.layout')->with('success', 'Signed up successfully');
    }

    public function signInProcess(Request $request)
    {
        // Buat validator manual
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        // Periksa apakah validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('user.dashboard')->with('success', 'Signed in successfully');
        } else {
            return redirect()->back()->with('error', 'Your email or password is incorrect!')->withInput();
        }
    }

    public function logout_process(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('signin.layout')->with('success', 'Logged out successfully');
    }
}
