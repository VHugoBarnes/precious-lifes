<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CuentaBancariaController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VeterinarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';
// require __DIR__.'/test.php';

////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////// USUARIO ///////////////////////////////////

Route::get('/editar-usuario', [UsuarioController::class, 'edit'])
    ->middleware(['auth', 'userPermission'])
    ->name('editar-usuario');

Route::post('/editar-usuario', [UsuarioController::class, 'update'])
    ->middleware(['auth', 'userPermission'])
    ->name('editar-usuario');

Route::get('/panel-control/usuario', [UsuarioController::class, 'controlPanel'])
->middleware(['auth', 'userPermission'])
->name('panel-usuario');

////////////////////////////////////////////////////////////////////////////////
///////////////////////////////// VETERINARIO /////////////////////////////////

Route::get('/editar-veterinario', [VeterinarioController::class, 'edit'])
    ->middleware(['auth', 'veterinarioPermission'])
    ->name('editar-veterinario');

Route::post('/editar-veterinario', [VeterinarioController::class, 'update'])
    ->middleware(['auth', 'veterinarioPermission'])
    ->name('editar-veterinario');

Route::get('/panel-control/veterinario', [VeterinarioController::class, 'controlPanel'])
    ->middleware(['auth', 'veterinarioPermission'])
    ->name('panel-veterinario');

////////////////////////////////////////////////////////////////////////////////
///////////////////////////////// DIRECCIONES /////////////////////////////////

Route::get('/registrar-direccion', [DireccionController::class, 'addAddress'])
    ->middleware(['auth', 'veterinarioPermission', 'redirectIfAddressAlreadyRegistered'])
    ->name('registrar-direccion');

Route::post('/registrar-direccion', [DireccionController::class, 'storeAddress'])
    ->middleware(['auth', 'veterinarioPermission', 'redirectIfAddressAlreadyRegistered'])
    ->name('registrar-direccion');

Route::get('/editar-direccion', [DireccionController::class, 'edit'])
    ->middleware(['auth', 'veterinarioPermission', 'redirectIfAddressNotExists'])
    ->name('editar-direccion');

Route::post('/editar-direccion', [DireccionController::class, 'update'])
    ->middleware(['auth', 'veterinarioPermission', 'redirectIfAddressNotExists'])
    ->name('editar-direccion');

////////////////////////////////////////////////////////////////////////////////
/////////////////////////////// CUENTA BANCARIA ///////////////////////////////

Route::get('/registrar-cuenta', [CuentaBancariaController::class, 'addBankAccount'])
    ->middleware(['auth', 'veterinarioPermission', 'redirectIfBankAccountAlreadyRegistered'])
    ->name('registrar-cuenta');

Route::post('/registrar-cuenta', [CuentaBancariaController::class, 'storeBankAccount'])
    ->middleware(['auth', 'veterinarioPermission', 'redirectIfBankAccountAlreadyRegistered'])
    ->name('registrar-cuenta');

Route::get('/editar-cuenta', [CuentaBancariaController::class, 'edit'])
    ->middleware(['auth', 'veterinarioPermission', 'redirectIfBankAccountNotExists'])
    ->name('editar-cuenta');

Route::post('/editar-cuenta', [CuentaBancariaController::class, 'update'])
    ->middleware(['auth', 'veterinarioPermission', 'redirectIfBankAccountNotExists'])
    ->name('editar-cuenta');

////////////////////////////////////////////////////////////////////////////////
////////////////////////////////// ANIMALES ///////////////////////////////////
Route::get('/dar-alta', [AnimalController::class, 'createAnimalito'])
    ->middleware(['auth', 'veterinarioPermission', 'redirectIfBankAccountNotExists', 'redirectIfAddressNotExists'])
    ->name('dar-alta');

Route::post('/dar-alta', [AnimalController::class, 'storeAnimalito'])
    ->middleware(['auth', 'veterinarioPermission', 'redirectIfBankAccountNotExists', 'redirectIfAddressNotExists'])
    ->name('dar-alta');

Route::get('/animales', [AnimalController::class, 'viewAll'])
    ->name('animales');

Route::get('/animales/{id}', [AnimalController::class, 'view'])
    ->where(['id' => '[0-9]+'])
    ->name('animal');

Route::get('/image/file/{filename}', [AnimalController::class, 'getImage'])->name('image.file');

Route::get('/animal/{id}', [AnimalController::class, 'edit'])
    ->middleware(['auth', 'veterinarioPermission', 'redirectIfVeterinarioDidnotRegisterAnimal'])
    ->where(['id'=>'[0-9]+'])
    ->name('editar-animal');

Route::put('/animal/{id}', [AnimalController::class, 'update'])
    ->middleware(['auth', 'veterinarioPermission', 'redirectIfVeterinarioDidnotRegisterAnimal'])
    ->where(['id'=>'[0-9]+']);

Route::delete('/animal/{id}', [AnimalController::class, 'delete'])
    ->middleware(['auth', 'veterinarioPermission', 'redirectIfVeterinarioDidnotRegisterAnimal'])
    ->where(['id' => '[0-9]+'])
    ->name('eliminar-animal');

////////////////////////////////////////////////////////////////////////////////
////////////////////////////////// DONACIONES ///////////////////////////////////
Route::get('/donar/{id}', [DonacionController::class, 'makeDonation'])
    ->where(['id' => '[0-9]+'])
    ->middleware(['auth', 'userPermission'])
    ->name('donar');

Route::post('/donar/{id}', [DonacionController::class, 'storeDonation'])
    ->where(['id' => '[0-9]+'])
    ->middleware(['auth', 'userPermission'])
    ->name('donar');
