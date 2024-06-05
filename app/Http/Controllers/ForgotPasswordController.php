<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
    public function forgot_password(Request $request)
    {
        // Buat validator manual
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        // Periksa apakah validasi gagal
        if ($validator->fails()) {
            return response()->json([
                'message_error' => $validator->errors()
            ]);
        }

        $status = Password::sendResetLink(
            $request->only('email')
        );

        /* return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]); */
        return response()->json(['status' => __($status)]);
    }
    public function reset_password(Request $request)
    {
        // Buat validator manual
        $validator = Validator::make($request->all(), [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Periksa apakah validasi gagal
        if ($validator->fails()) {
            return response()->json([
                'message_error' => $validator->errors()
            ]);
        }

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        /* return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]); */
            return response()->json(['status' => __($status)]);
    }
}
