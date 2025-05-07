<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function store(Request $request)
    {
        $program = Program::create($request->all());
        return response()->json($program, 201);
    }

    public function update(Request $request, $id)
    {
        $program = Program::findOrFail($id);
        $program->update($request->all());
        return response()->json($program, 200);
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        $program->delete();
        return response()->json(null, 204);
    }
}
