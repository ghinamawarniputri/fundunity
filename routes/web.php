<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\TransaksiMasukController;
use App\Http\Controllers\AdminController;

// Landing Pages
Route::view('/', 'index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/course', 'course')->name('courses');
Route::view('/blog', 'blog')->name('blog');
Route::view('/team', 'team')->name('team');
Route::view('/volunteers', 'volunteers')->name('volunteers');
Route::view('/feature', 'feature')->name('features');
Route::view('/404', '404'); 
Route::view('/donate', 'donate')->name('donate');  
Route::view('/program', 'program')->name('program');
Route::view('/campaign', 'campaign')->name('campaign');

// Midtrans
Route::get('/checkout', [MidtransController::class, 'index'])->name('midtrans');
Route::post('/midtrans/token', [MidtransController::class, 'token']);
Route::post('/midtrans/callback', [MidtransController::class, 'callback']);
Route::post('/transaksimasuk', [TransaksiMasukController::class, 'store']);

// Auth login admin ke dashboard
Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login'); // Laravel butuh ini
Route::post('/login', [AdminAuthController::class, 'login'])->name('login'); // opsional
Route::get('/admin.dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');


Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('admin_dashboard', [AdminAuthController::class, 'dashboard'])->name('dashboard');
    Route::get('transaksi', [TransaksiMasukController::class, 'index'])->name('transaksi');
    Route::put('transaksi/{id}', [TransaksiMasukController::class, 'update'])->name('transaksi.update');
    Route::delete('transaksi/{id}', [TransaksiMasukController::class, 'destroy'])->name('transaksi.destroy');
    Route::get('admin_partner', [AdminController::class, 'partnerIndex'])->name('partner.index');
    Route::get('partner/create', [AdminController::class, 'partnerCreate'])->name('partner.create');
    Route::post('partner/store', [AdminController::class, 'partnerStore'])->name('partner.store');
    Route::get('partner/edit/{id}', [AdminController::class, 'partnerEdit'])->name('partner.edit');
    Route::put('partner/update/{id}', [AdminController::class, 'partnerUpdate'])->name('partner.update');
    Route::delete('partner/hapus/{id}', [AdminController::class, 'partnerHapus'])->name('partner.hapus');
});