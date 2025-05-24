<?php

namespace App\Http\Controllers;

use App\Models\TransaksiMasuk;
use Illuminate\Http\Request;

class TransaksiMasukController extends Controller
{
    public function store(Request $request)
    {
    $data = $request->all();
    $data['status'] = 'Selesai';

    $transaksimasuk = TransaksiMasuk::create($data);

    return response()->json($transaksimasuk, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nominal' => 'required|numeric',
            'keterangan' => 'required|string',
            'status' => 'required|string',
        ]);

        $transaksimasuk = TransaksiMasuk::findOrFail($id);
        $transaksimasuk->update($request->only('nama', 'email', 'nominal', 'keterangan', 'status'));

        return redirect()->route('admin.transaksi')->with('success', 'Data berhasil diupdate');
    }


    public function destroy($id)
    {
        $transaksimasuk = TransaksiMasuk::findOrFail($id);
        $transaksimasuk->delete();
        return response()->json(null, 204);
    }

    public function index()
    {
        $dataKonten = TransaksiMasuk::all();
        return view('admin.admin_transaksi', compact('dataKonten'));
    }
}