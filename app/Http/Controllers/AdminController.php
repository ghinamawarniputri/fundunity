<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.admin_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.admin_dashboard');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function dashboard()
    {
        return view('admin.admin_dashboard');
    }
}
