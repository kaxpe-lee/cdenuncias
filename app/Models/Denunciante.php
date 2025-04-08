<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Denunciante extends Model
{
    protected $fillable = [
        'nombre',
        'apellidos',
        'telefono',
        'email'
    ];

    public function denuncias()
    {
        return $this->hasMany(Denuncia::class);
    }
}
