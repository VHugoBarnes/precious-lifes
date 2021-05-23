<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function edit()
    {
        return view('usuarios.editar');
    }

    public function update(Request $request)
    {
        // Recogemos el id del usuario identificado
        $usuario = Usuario::find(Auth::user()->id);

        $validate = $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:usuarios,username,'. Auth::user()->id,
            'email' => 'required|string|max:255|unique:usuarios,email,'. Auth::user()->id,
        ]);

        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->username = $request->username;
        $usuario->email = $request->email;
        $usuario->save();

        return redirect()->back();
    }
}
