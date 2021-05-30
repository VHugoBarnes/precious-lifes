<?php

namespace App\Http\Middleware;

use App\Models\Direccion;
use App\Models\Veterinario;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAddressNotExists
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
        
        $direccion = Direccion::where('veterinario_id', $veterinario_id)->get();
        
        if(count($direccion) == 0) {
            return redirect()->route('registrar-direccion');
        } else {
            return $next($request);
        }
    }
}
