<?php

namespace App\Providers;

use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Blade::if('usuario', function ($value) {
            $user = Auth::user();
            $role_id = '';

            foreach ($user->role as $rol) {
                $role_id = $rol->pivot->role_id;
            }

            $role = Role::find($role_id);

            if ($role->roles == $value) {
                return true;
            }
        });
    }
}
