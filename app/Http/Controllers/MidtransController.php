<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class MidtransController extends Controller 
{
    public function index()
    {
    return view('midtrans'); // pastikan file view checkout.blade.php ada di resources/views
    }

    public function token(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'amount' => 'required|numeric|min:1000',
        'keterangan' => 'nullable|string',
    ]);

    \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
    \Midtrans\Config::$isProduction = false;
    \Midtrans\Config::$isSanitized = true;
    \Midtrans\Config::$is3ds = true;

    $orderId = 'DONATION-' . uniqid();

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

    $snapToken = \Midtrans\Snap::getSnapToken($params);
    return response()->json(['token' => $snapToken]);
    }
}