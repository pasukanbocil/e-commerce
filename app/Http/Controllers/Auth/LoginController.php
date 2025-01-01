<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login.login', [
            'title' => 'Login | Kemed Store'
        ]);
    }

    public function authenticate(LoginRequest $request)
    {
        $validated = $request->validated();

        if (auth()->attempt($validated)) {
            $request->session()->regenerate();

            if (auth()->user()->role == 'admin') {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/');
            }
        }
        return back()->with('loginError', 'Email atau password salah');
    }
}
