<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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