<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function denuncias()
    {
        return $this->hasMany(Denuncia::class);
    }
}
