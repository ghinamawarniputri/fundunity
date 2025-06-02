<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TransaksiMasuk;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.admin_login');
    }

    public function login(Request $request)
    {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'g-recaptcha-response' => 'required|captcha'
    ]);

    if (Auth::attempt($request->only('email', 'password'))) {
        $request->session()->regenerate();
        return redirect()->route('admin.dashboard');
    }

    return back()->with('error', 'Email atau password salah');
    }

    public function dashboard()
    {
    // Ambil transaksi terbaru
    $dataTransaksi = TransaksiMasuk::latest()->take(5)->get();

    // Pendapatan per bulan (misalnya 6 bulan terakhir)
    $monthlyChartData = TransaksiMasuk::selectRaw('MONTH(created_at) as month, SUM(nominal) as total')
        ->whereYear('created_at', now()->year)
        ->groupBy('month')
        ->orderBy('month')
        ->pluck('total', 'month');

    // Format agar lengkap dari Jan–Jun (atau Jan–Dec)
    $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    $earnings = [];
    for ($i = 1; $i <= 6; $i++) {
        $earnings[] = $monthlyChartData[$i] ?? 0;
    }

    // Total pendapatan bulan ini
    $monthlyEarnings = TransaksiMasuk::whereMonth('created_at', now()->month)->sum('nominal');

    // Total pendapatan tahun ini
    $annualEarnings = TransaksiMasuk::whereYear('created_at', now()->year)->sum('nominal');

    $tasksProgress = 50;
    $pendingRequests = 18;

    return view('admin.admin_dashboard', compact(
        'dataTransaksi',
        'monthlyEarnings',
        'annualEarnings',
        'tasksProgress',
        'pendingRequests',
        'earnings'
    ));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
