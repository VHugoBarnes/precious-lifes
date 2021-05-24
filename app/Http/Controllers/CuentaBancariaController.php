<?php

namespace App\Http\Controllers;

use App\Models\Cuenta_Bancaria;
use App\Models\Usuario;
use App\Models\Veterinario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CuentaBancariaController extends Controller
{
    public function addBankAccount() {
        return view('veterinario.cuentaBanco');
    }

    public function storeBankAccount(Request $request) {
        // Recogemos el id del usuario identificado
        $usuario_id = Auth::user()->id;
        $usuario = Usuario::find($usuario_id);

        // Recogemos el id del veterinario
        $veterinario_id = Veterinario::where('usuario_id', $usuario_id)->pluck('id')[0];
        $veterinario = Veterinario::find($veterinario_id);

        $validate = $this->validate($request, [
            'nombre_propietario' => 'required|string|max:255',
            'numero_cuenta' => 'required|string|max:255',
            'banco' => 'required|string|max:255',
        ]);

        $cuenta_bancaria = Cuenta_Bancaria::create([
            'veterinario_id' => $veterinario_id,
            'nombre_propietario' => $request->nombre_propietario,
            'numero_cuenta' => $request->numero_cuenta,
            'banco' => $request->banco
        ]);

        return redirect()->route('home');

    }
    
}
