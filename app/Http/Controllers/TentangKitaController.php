<?php

namespace App\Http\Controllers;

use App\Models\TentangKita;
use Illuminate\Http\Request;

class TentangKitaController extends Controller
{
    public function store(Request $request)
    {
        $tentangkita = TentangKita::create($request->all());
        return response()->json($tentangkita, 201);
    }

    public function update(Request $request, $id)
    {
        $tentangkita = TentangKita::findOrFail($id);
        $tentangkita->update($request->all());
        return response()->json($tentangkita, 200);
    }

    public function destroy($id)
    {
        $tentangkita = TentangKita::findOrFail($id);
        $tentangkita->delete();
        return response()->json(null, 204);
    }
}
