<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPermission
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
        $user = Auth::user();
        $role_id = '';

        foreach($user->role as $rol) {
            $role_id = $rol->pivot->role_id;
        }

        $role = Role::find($role_id);
        
        if($role->roles == 'Usuario') {
            return $next($request);
        } else {
            return redirect('dashboard');
        }
    }
}
