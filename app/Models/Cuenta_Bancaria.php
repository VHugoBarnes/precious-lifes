<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta_Bancaria extends Model
{
    use HasFactory;

    protected $table = 'cuenta_bancaria';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'veterinario_id',
        'nombre_propietario',
        'numero_cuenta',
        'banco'
    ];

    public function veterinario()
    {
        return $this->belongsTo(Veterinario::class, 'veterinario_id');
    }


}
