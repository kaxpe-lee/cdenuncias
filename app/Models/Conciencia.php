<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conciencia extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function denuncias()
    {
        return $this->hasMany(Denuncia::class);
    }
}
