<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\TransaksiMasuk;

class MidtransController extends Controller 
{
    public function index()
    {
        return view('midtrans'); // pastikan file view-nya ada
    }

    public function token(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'amount' => 'required|numeric|min:1000',
            'keterangan' => 'required|string',
        ]);

        // Konfigurasi Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $orderId = 'DONATION-' . uniqid();

        // Simpan data ke database terlebih dahulu
        TransaksiMasuk::create([
            'nama' => $request->name,
            'email' => $request->email,
            'nominal' => $request->amount,
            'keterangan' => $request->keterangan,
            'status' => 'Selesai' // langsung diset
        ]);

        // Buat token pembayaran
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => (int) $request->amount,
            ],
            'customer_details' => [
                'first_name' => $request->name,
                'email' => $request->email,
            ],
            'item_details' => [
                [
                    'id' => 'donation',
                    'price' => (int) $request->amount,
                    'quantity' => 1,
                    'name' => 'Donasi - ' . ($request->keterangan ?? 'Tanpa Keterangan')
                ]
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return response()->json(['token' => $snapToken]);
    }
}
