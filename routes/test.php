<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/test', [TestController::class, 'test'])
    ->name('test');

Route::get('/iniciarsesion', [TestController::class, 'iniciarsesion'])
    ->name('iniciarsesion');

Route::get('/registrarse', [TestController::class, 'registrarse'])
    ->name('registrarse');

Route::get('/registrarse/confirmarcorreo', [TestController::class, 'verifyemail'])
    ->name('verifyemail');

Route::get('/olvidemipassword', [TestController::class, 'olvidarpass'])
    ->name('olvidarpass');

Route::get('/confirmarpass', [TestController::class, 'confirmarpass'])
    ->name('confirmarpass');

Route::get('/dardealta', [TestController::class, 'daralta'])
    ->name('daralta');

Route::get('forma-pago', function(){
    return view('test.formapago');
});