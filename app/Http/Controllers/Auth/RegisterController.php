<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    protected function confirmSignup(Request $request)
    {
        $userExist = User::where('email', $request->email)->first();
        if ($userExist) {
            \Session::put('error', 'This email already exists.');
            return back()->withInput($request->only('email', 'remember'));
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => false,
        ]);

        return redirect(route('login'));
    }
}
