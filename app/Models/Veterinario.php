<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    use HasFactory;

    protected $table = 'veterinarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario_id',
        'rfc',
        'nombre_establecimiento',
        'nombre_propietario',
        'verificado'
    ];

    public function animales()
    {
        return $this->hasMany(Animal::class, 'veterinario_id');
    }

    public function cuenta_bancaria()
    {
        return $this->hasOne(Cuenta_Bancaria::class, 'veterinario_id');
    }

    public function direccion()
    {
        return $this->hasOne(Direccion::class, 'veterinario_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
