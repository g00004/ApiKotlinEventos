<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(){
        return Evento::all();
    }

    public function store(Request $request){
        $evento = Evento::create($request->all());
        return response()->json($evento, 201);
    }

    public function show($id){
        $evento = Evento::find($id);
        if (!$evento) {
            return response()->json(['message' => 'Evento no encontrado'], 404);
        }
        return $evento;
    }

    public function update(Request $request, $id){
        $evento = Evento::find($id);
        if (!$evento) {
            return response()->json(['message' => 'Evento no encontrado'], 404);
        }
        $evento->update($request->all());
        return $evento;
    }

    public function destroy($id){
        $evento = Evento::find($id);
        if (!$evento) {
            return response()->json(['message' => 'Evento no encontrado'], 404);
        }
        $evento->delete();
        return response()->json(['message' => 'Evento eliminado']);
    }
}
