<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Transaccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonacionController extends Controller
{
    public function makeDonation($id)
    {
        $animal = Animal::find($id);

        return view('donacion.hacer', [
            'animal' => $animal
        ]);
    }

    public function storeDonation(Request $request, $id)
    {
        $validate = $this->validate($request, [
            'monto' => 'required|numeric'
        ]);

        // Verificar si el monto no excede lo que necesita el animalito
        $animal = Animal::find($id);
        if($request->monto > $animal->fondos) {
            return redirect()->back()->with(['message' => 'El monto excede los fondos necesarios']);
        } else { 
            // Si no los excede, descontarlo
            $animal->fondos = $animal->fondos - $request->monto;
            $animal->save();
        }

        $transaccion = Transaccion::create([
            'usuario_id' => Auth::user()->id,
            'animal_id' => $id,
            'monto' => $request->monto,
            'folio' => 'folio'
        ]);

        return redirect()->route('animales')->with(['message' => '¡Donación realizada, muchas gracias!']);
    }
}
