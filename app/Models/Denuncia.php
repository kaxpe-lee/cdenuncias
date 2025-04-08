<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    protected $fillable = [
        'empresa_id',
        'denunciante_id',
        'terceros_id',
        'estado_id',
        'conciencia_id',
        'relacion_id',
        'condiciones',
        'proteccion_datos',
        'anonimato',
        'identifica',
        'sosfecha',
        'nombre_terceros',
        'lugar',
        'descripcion',
        'fichero'
    ];

    public function conciencia()
    {
        return $this->belongsTo(Conciencia::class);
    }

    public function tercero()
    {
        return $this->belongsTo(Tercero::class);
    }

    public function relacion()
    {
        return $this->belongsTo(Relacion::class);
    }

    public function denunciante()
    {
        return $this->belongsTo(Denunciante::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function expediente()
    {
        return $this->belongsTo(Expediente::class);
    }
}
