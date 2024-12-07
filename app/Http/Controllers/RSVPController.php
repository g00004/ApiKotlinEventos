<?php

namespace App\Http\Controllers;

use App\Models\RSVP;
use Illuminate\Http\Request;

class RSVPController extends Controller
{
    public function index(){
        return RSVP::all();
    }

    public function store(Request $request){
        $rsvp = RSVP::create($request->all());
        return response()->json($rsvp, 201);
    }

    public function show($id){
        $rsvp = RSVP::find($id);
        if (!$rsvp) {
            return response()->json(['message' => 'RSVP no encontrado'], 404);
        }
        return $rsvp;
    }

    public function update(Request $request, $id){
        $rsvp = RSVP::find($id);
        if (!$rsvp) {
            return response()->json(['message' => 'RSVP no encontrado'], 404);
        }
        $rsvp->update($request->all());
        return $rsvp;
    }

    public function destroy($id){
        $rsvp = RSVP::find($id);
        if (!$rsvp) {
            return response()->json(['message' => 'RSVP no encontrado'], 404);
        }
        $rsvp->delete();
        return response()->json(['message' => 'RSVP eliminado']);
    }
}
