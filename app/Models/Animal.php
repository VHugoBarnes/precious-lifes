<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'veterinario_id',
        'nombre',
        'descripcion',
        'condicion',
        'necesita',
        'imagen',
        'fondos'
    ];

    public function veterinario()
    {
        return $this->belongsTo(Veterinario::class, 'veterinario_id');
    }

    public function transaccion()
    {
        return $this->hasMany(Transaccion::class, 'animal_id');
    }
}
