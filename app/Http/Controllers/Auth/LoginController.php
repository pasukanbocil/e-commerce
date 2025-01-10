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
            toastr()->success('Login Berhasil, Selamat datang ' . auth()->user()->name);
            if (auth()->user()->role == 'admin') {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/');
            }
        }
        toastr()->error('Login Gagal, Silahkan cek kembali email dan password anda');
        return back();
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        toastr()->success('Logout Berhasil');
        return redirect('/');
    }
}
