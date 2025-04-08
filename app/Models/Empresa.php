<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Empresa extends Model
{
    protected $fillable = [
        'nombre',
        'email',
        'logo',
        'p1',
        'p2',
        'p3',
        'alto',
        'estado'
    ];

    public function denuncias()
    {
        return $this->hasMnay(Denuncia::class);
    }

    protected static function booted()
    {
        static::creating(function ($empresa) {
            $empresa->hash2 = str_replace('-', '', (string) Str::uuid());
        });
    }
}
