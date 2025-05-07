<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function store(Request $request)
    {
        $volunteer = Volunteer::create($request->all());
        return response()->json($volunteer, 201);
    }

    public function update(Request $request, $id)
    {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->update($request->all());
        return response()->json($volunteer, 200);
    }

    public function destroy($id)
    {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();
        return response()->json(null, 204);
    }
}
