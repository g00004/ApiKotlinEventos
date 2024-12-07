<?php

namespace App\Http\Controllers;

use App\Models\HistorialEvento;
use Illuminate\Http\Request;

class HistorialEventoController extends Controller
{
    public function index(){
        return HistorialEvento::all();
    }

    public function store(Request $request){
        $historial = HistorialEvento::create($request->all());
        return response()->json($historial, 201);
    }

    public function show($id){
        $historial = HistorialEvento::find($id);
        if (!$historial) {
            return response()->json(['message' => 'Historial no encontrado'], 404);
        }
        return $historial;
    }

    public function destroy($id){
        $historial = HistorialEvento::find($id);
        if (!$historial) {
            return response()->json(['message' => 'Historial no encontrado'], 404);
        }
        $historial->delete();
        return response()->json(['message' => 'Historial eliminado']);
    }
}
