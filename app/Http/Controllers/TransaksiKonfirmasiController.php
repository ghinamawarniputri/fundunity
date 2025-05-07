<?php

namespace App\Http\Controllers;

use App\Models\TransaksiKonfirmasi;
use Illuminate\Http\Request;

class TransaksiKonfirmasiController extends Controller
{
    public function store(Request $request)
    {
        $transaksikonfirmasi = TransaksiKonfirmasi::create($request->all());
        return response()->json($transaksikonfirmasi, 201);
    }

    public function update(Request $request, $id)
    {
        $transaksikonfirmasi = TransaksiKonfirmasi::findOrFail($id);
        $transaksikonfirmasi->update($request->all());
        return response()->json($transaksikonfirmasi, 200);
    }

    public function destroy($id)
    {
        $transaksikonfirmasi = TransaksiKonfirmasi::findOrFail($id);
        $transaksikonfirmasi->delete();
        return response()->json(null, 204);
    }
}
