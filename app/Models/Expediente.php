<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $fillable = [
        'denuncia_id',
        'user_id',
        'estado_id'
    ];

    public function denuncia()
    {
        return $this->hasOne(Denuncia::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
