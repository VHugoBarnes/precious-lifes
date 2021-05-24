<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion;
use App\Models\Usuario;
use App\Models\Veterinario;
use Illuminate\Support\Facades\Auth;

class DireccionController extends Controller
{
    public function addAddress() {
        return view('veterinario.direccion');
    }

    public function storeAddress(Request $request) {
        // Recogemos el id del usuario identificado
        $usuario_id = Auth::user()->id;
        $usuario = Usuario::find(Auth::user()->id);

        // Recogemos el id del veterinario
        $veterinario_id = Veterinario::where('usuario_id', $usuario_id)->pluck('id')[0];
        $veterinario = Veterinario::find($veterinario_id);

        $validate = $this->validate($request, [
            'colonia' => 'required|string|max:255',
            'calle' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'localidad' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'cp' => 'required|string|max:255',
        ]);

        $direccion = Direccion::create([
            'veterinario_id' => $veterinario_id,
            'colonia' => $request->colonia,
            'calle' => $request->calle,
            'numero' => $request->numero,
            'localidad' => $request->localidad,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'cp' => $request->cp
        ]);

        return redirect()->route('home');
    }
}
