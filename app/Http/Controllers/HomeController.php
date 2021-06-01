<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Obtener todos los animalitos registrados
        $animales = Animal::all();

        return view('test.home', [
            'animales' => $animales
        ]);
    }
}
