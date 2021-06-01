<?php

namespace App\Http\Middleware;

use App\Models\Animal;
use App\Models\Veterinario;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfVeterinarioDidnotRegisterAnimal
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $veterinario_id = Veterinario::where('usuario_id', Auth::user()->id)->pluck('id');

        // Buscamos el animal por su id y nos preguntamos si el id del veterinario auth es el mismo
        // que el del animal
        $animal = Animal::find($request->id);

        if($animal->veterinario_id == $veterinario_id[0]) {
            return $next($request);
        } else {
            return redirect()->back();
        }

    }
}
