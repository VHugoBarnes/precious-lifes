<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Cuenta_Bancaria;
use App\Models\Direccion;
use App\Models\Usuario;
use App\Models\Veterinario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VeterinarioController extends Controller {

    public function edit() {
        // Datos del veterinario
        $usuario_id = Auth::user()->id;
        $veterinario_id = Veterinario::where('usuario_id', $usuario_id)->pluck('id');
        $veterinario = Veterinario::find($veterinario_id)[0];

        return view('veterinario.editar', [
            'veterinario' => $veterinario
        ]);
    }

    public function update(Request $request) {
        // Recogemos el id del usuario identificado
        $usuario_id = Auth::user()->id;
        $usuario = Usuario::find($usuario_id);

        // Recogemos el id del veterinario
        $veterinario_id = Veterinario::where('usuario_id', $usuario_id)->pluck('id')[0];
        $veterinario = Veterinario::find($veterinario_id);

        $validate = $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:usuarios,email,'. Auth::user()->id,
            'rfc' => 'required|string|max:255',
            'nombre_establecimiento' => 'required|string|max:255'
        ]);

        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->email = $request->email;
        $usuario->save();

        $veterinario->rfc = $request->rfc;
        $veterinario->nombre_establecimiento = $request->nombre_establecimiento;
        $veterinario->save();

        return redirect()->route('home');
    }

    public function controlPanel()
    {
        // Recogemos el id del usuario identificado
        $usuario_id = Auth::user()->id;
        $usuario = Usuario::find($usuario_id);

        // Recogemos el id del veterinario
        $veterinario_id = Veterinario::where('usuario_id', $usuario_id)->pluck('id')[0];
        $veterinario = Veterinario::find($veterinario_id);
        $animales = Animal::where('veterinario_id', $veterinario_id)->get();

        return view('veterinario.panelControl', [
            'animales' => $animales,
            'veterinario' => $veterinario
        ]);
    }

}
