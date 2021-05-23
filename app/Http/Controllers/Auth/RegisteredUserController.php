<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\Usuario;
use App\Models\Veterinario;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'password' => ['required', 'confirmed', Rules\Password::min(8)],
        ]);

        $user = Usuario::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Ingresar en la tabla pivot los id's correspondientes
        $role_id = Role::where('roles', 'like', 'Usuario')->first('id');        
        $user->role()->attach($role_id);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function createVeterinario()
    {
        return view('auth.registerVeterinario');
    }

    public function storeVeterinario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'rfc' => 'required|string|max:255',
            'nombre_establecimiento' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'password' => ['required', 'confirmed', Rules\Password::min(8)],
        ]);

        $user = Usuario::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'username' => $request->nombre_establecimiento,
            'password' => Hash::make($request->password),
        ]);

        $veterinario = Veterinario::create([
            'usuario_id' => $user->id,
            'rfc' => $request->rfc,
            'nombre_establecimiento' => $request->nombre_establecimiento,
            'nombre_propietario' => $request->nombre . ' ' . $request->apellidos,
            'verificado' => 0
        ]);

        // Ingresar en la tabla pivot los id's correspondientes
        $role_id = Role::where('roles', 'like', 'Veterinario')->first('id');        
        $user->role()->attach($role_id);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
