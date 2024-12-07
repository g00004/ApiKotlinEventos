<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return Usuario::all();
    }

    public function store(Request $request){
        $usuario = Usuario::create($request->all());
        return response()->json(['message' => 'Usuario creado correctamente'], 200);
    }

    public function show($id){
        $usuario = Usuario::find($id);
        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
        return $usuario;
    }

    public function update(Request $request, $id){
        $usuario = Usuario::find($id);
        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
        $usuario->update($request->all());
        return response()->json(['message' => 'Usuario editado'], 200);
    }

    public function destroy($id){
        $usuario = Usuario::find($id);
        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }
        $usuario->delete();
        return response()->json(['message' => 'Usuario eliminado'],200);
    }
}
