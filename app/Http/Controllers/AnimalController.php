<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Transaccion;
use App\Models\Veterinario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    public function createAnimalito()
    {
        return view('animal.darAlta');
    }

    public function storeAnimalito(Request $request)
    {
        $validate = $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'condicion' => 'required|string|max:255',
            'necesita' => 'required|string|max:255',
            'imagen' => 'required|mimes:png,jpg,jpeg',
            'fondos' => 'required|numeric'
        ]);

        $imagen = $request->file('imagen');

        // Recoger el id del veterinario autenticado
        $usuario_id = Auth::user()->id;
        $veterinario_id = Veterinario::where('usuario_id', $usuario_id)->pluck('id')[0];

        // Guardar foto
        $nombre_ruta_imagen = $veterinario_id . $request->nombre . $imagen->getClientOriginalName();
        Storage::disk('animales')->put($nombre_ruta_imagen, File::get($imagen));

        // Crear nuevo registro
        $animal = Animal::create([
            'veterinario_id' => $veterinario_id,
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'condicion' => $request->condicion,
            'necesita' => $request->necesita,
            'imagen' => $nombre_ruta_imagen,
            'fondos' => $request->fondos,
        ]);

        return redirect()->route('animales');
    }

    public function viewAll()
    {
        // Obtener todos los animalitos registrados
        $animales = Animal::all();

        return view('animal.verTodos', [
            'animales' => $animales
        ]);
    }

    public function view($id)
    {
        $animal = Animal::find($id);

        return view('animal.ver', [
            'animal' => $animal
        ]);
    }

    public function getImage($filename)
    {
        $file = Storage::disk('animales')->get($filename);

        return new Response($file, 200);
    }

    public function edit($id)
    {
        $animal = Animal::find($id);

        return view('animal.editar', [
            'animal' => $animal
        ]);
    }

    public function update(Request $request, $id)
    {
        $validate = $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'condicion' => 'required|string|max:255',
            'necesita' => 'required|string|max:255',
            // 'imagen' => 'mimes:png,jpg,jpeg',
            'fondos' => 'required|numeric'
        ]);

        $imagen = $request->file('imagen');

        // Recoger el id del veterinario autenticado
        $usuario_id = Auth::user()->id;
        $veterinario_id = Veterinario::where('usuario_id', $usuario_id)->pluck('id')[0];

        // Obtener animalito por id
        $animal = Animal::find($id);

        // Guardar foto
        if($imagen) {
            Storage::disk('animales')->delete($animal->imagen);
            $nombre_ruta_imagen = $veterinario_id . $request->nombre . $imagen->getClientOriginalName();
            Storage::disk('animales')->put($nombre_ruta_imagen, File::get($imagen));
            $animal->imagen = $nombre_ruta_imagen;
        }

        $animal->nombre = $request->nombre;
        $animal->descripcion = $request->descripcion;
        $animal->condicion = $request->condicion;
        $animal->necesita = $request->necesita;
        $animal->fondos = $request->fondos;
        $animal->save();

        return redirect()->route('panel-veterinario');
    }

    public function delete($id)
    {
         // Recoger el id del veterinario autenticado
         $usuario_id = Auth::user()->id;
         $veterinario_id = Veterinario::where('usuario_id', $usuario_id)->pluck('id')[0];
 
         // Obtener animalito por id
         $animal = Animal::find($id);

         // Eliminar transacciones
         $transacciones = Transaccion::where('animal_id', $animal->id)->get();
         foreach($transacciones as $transaccion) {
             $transaccion->delete();
         }

         // Eliminar foto del filesystem
         Storage::disk('animales')->delete($animal->imagen);

         // Eliminar registro de la base de datos
         $animal->delete();

         return redirect()->route('panel-veterinario');
    }
}
