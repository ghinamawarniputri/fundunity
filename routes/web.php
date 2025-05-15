<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MidtransController;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;

Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.dashboard');


Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/course', function () {
    return view('course');
})->name('courses');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonials');

Route::get('/404', function () {
    return view('404');
});

Route::get('/feature', function () {
    return view('feature');
})->name('features');
<<<<<<< HEAD
=======

//tesmidtrans
Route::get('/checkout', [MidtransController::class, 'index'])->name('midtrans');
Route::post('/midtrans/token', [MidtransController::class, 'token']);
Route::post('/midtrans/callback', [MidtransController::class, 'callback']);

//teslogin diubah jadi file baru nanti
Route::get('/login', function () {
    return view('teslogin');    
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    return back()->with('error', 'Email atau password salah');
})->name('login.process');
Route::post('/logout', function () {
    Auth::logout();
    return response()->json(['message' => 'Logged out']);
})->name('logout');
>>>>>>> f2ffa658e44d517f51e644a498d30e6a67849775
