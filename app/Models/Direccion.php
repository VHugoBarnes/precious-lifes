<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'direcciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'veterinario_id',
        'colonia',
        'calle',
        'numero',
        'localidad',
        'estado',
        'pais',
        'cp'
    ];

    public function veterinario()
    {
        return $this->belongsTo(Veterinario::class, 'veterinario_id');
    }
}
