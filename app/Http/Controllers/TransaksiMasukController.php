<?php

namespace App\Http\Controllers;

use App\Models\TransaksiMasuk;
use Illuminate\Http\Request;

class TransaksiMasukController extends Controller
{
    public function store(Request $request)
    {
        $transaksimasuk = TransaksiMasuk::create($request->all());
        return response()->json($transaksimasuk, 201);
    }

    public function update(Request $request, $id)
    {
        $transaksimasuk = TransaksiMasuk::findOrFail($id);
        $transaksimasuk->update($request->all());
        return response()->json($transaksimasuk, 200);
    }

    public function destroy($id)
    {
        $transaksimasuk = TransaksiMasuk::findOrFail($id);
        $transaksimasuk->delete();
        return response()->json(null, 204);
    }
}
