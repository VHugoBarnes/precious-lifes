<?php

namespace App\Http\Controllers;

use App\Models\Cuenta_Bancaria;
use App\Models\Direccion;
use App\Models\Usuario;
use App\Models\Veterinario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VeterinarioController extends Controller {
    public function edit() {
        return view('veterinario.editar');
    }

    public function update(Request $request) {
        // Recogemos el id del usuario identificado
        $usuario = Usuario::find(Auth::user()->id);

        // Recogemos el id del veterinario
        $veterinario_id = Veterinario::where('usuario_id', $usuario);
        $veterinario = Veterinario::find($veterinario_id);

        $validate = $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
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

        return redirect()->back();
    }

    public function addAddress() {
        return view('veterinario.direccion');
    }

    public function storeAddress(Request $request) {
        // Recogemos el id del usuario identificado
        $usuario = Usuario::find(Auth::user()->id);

        // Recogemos el id del veterinario
        $veterinario_id = Veterinario::where('usuario_id', $usuario);
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

        return redirect()->back();
    }

    public function addBankAccount() {
        return view('veterinario.cuentaBanco');
    }

    public function storeBankAccount(Request $request) {
        // Recogemos el id del usuario identificado
        $usuario = Usuario::find(Auth::user()->id);

        // Recogemos el id del veterinario
        $veterinario_id = Veterinario::where('usuario_id', $usuario);
        $veterinario = Veterinario::find($veterinario_id);

        $validate = $this->validate($request, [
            'nombre_propietario' => 'required|string|max:255',
            'numero_cuenta' => 'required|string|max:255',
            'banco' => 'required|string|max:255',
        ]);

        $cuenta_bancaria = Cuenta_Bancaria::create([
            'veterinario_id' => $veterinario_id,
            'nombre_propietario' => $request->nombre_propietario,
            
        ]);

    }
}
