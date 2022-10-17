<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showAdminLoginForm()
    {
        if (auth()->check()) {
            if (auth()->user()->is_admin) {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('user.dashboard');
        }
        return view('auth.login');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function confirmLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            if (auth()->user()->is_admin) {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('user.home');
        }
        \Session::put('error', 'These credentials do not match our records.');
        return back()->withInput($request->only('email', 'remember'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        \Session::flush();
        \Session::put('success', 'You are logout successfully');
        return redirect(route('login'));
    }
}
