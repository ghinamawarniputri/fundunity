<?php

use Illuminate\Support\Facades\Route;

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
