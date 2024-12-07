<?php

namespace App\Http\Controllers;

use App\Models\ComentarioCalificacion;
use Illuminate\Http\Request;

class ComentarioCalificacionController extends Controller
{
    public function index(){
        return ComentarioCalificacion::all();
    }

    public function store(Request $request){
        $comentario = ComentarioCalificacion::create($request->all());
        return response()->json($comentario, 201);
    }

    public function show($id){
        $comentario = ComentarioCalificacion::find($id);
        if (!$comentario) {
            return response()->json(['message' => 'Comentario no encontrado'], 404);
        }
        return $comentario;
    }

    public function destroy($id){
        $comentario = ComentarioCalificacion::find($id);
        if (!$comentario) {
            return response()->json(['message' => 'Comentario no encontrado'], 404);
        }
        $comentario->delete();
        return response()->json(['message' => 'Comentario eliminado']);
    }
}
