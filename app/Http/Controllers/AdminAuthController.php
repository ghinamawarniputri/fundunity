<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.admin_login'); // Sesuaikan dengan nama blade Anda
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        // Coba login
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            // Jika berhasil, redirect ke dashboard
            return redirect()->route('admin.dashboard');
        }

        // Jika gagal
        return back()->with('error', 'Invalid credentials');
    }

    public function dashboard()
    {
        return view('admin.admin_dashboard'); // Sesuaikan dengan blade dashboard Anda
    }
}
