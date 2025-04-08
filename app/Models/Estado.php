<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function expedientes()
    {
        return $this->hasMany(Expediente::class);
    }
}
