<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\TransaksiMasukController;

// Landing Pages
Route::view('/', 'index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/course', 'course')->name('courses');
Route::view('/blog', 'blog')->name('blog');
Route::view('/team', 'team')->name('team');
Route::view('/testimonial', 'testimonial')->name('testimonials');
Route::view('/feature', 'feature')->name('features');
Route::view('/404', '404');

// Midtrans
Route::get('/checkout', [MidtransController::class, 'index'])->name('midtrans');
Route::post('/midtrans/token', [MidtransController::class, 'token']);
Route::post('/midtrans/callback', [MidtransController::class, 'callback']);
Route::post('/transaksimasuk', [TransaksiMasukController::class, 'store']);

Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login'); // Laravel butuh ini
Route::get('/admin.login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login'); // Laravel butuh ini
Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.process'); // opsional
Route::get('/admin.dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');

// Hanya bisa diakses saat sudah login
Route::middleware('auth')->group(function () {
    Route::get('/admin/admin_dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::post('/admin.logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
