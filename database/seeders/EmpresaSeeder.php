<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresa::create([
            'nombre' => 'Grupo Asesor Ros',
            'email' => 'info@rosgrupoasesor.com',
            'p1' => '58',
            'p2' => '94',
            'p3' => '67',
            'alto' => 60,
            'estado' => true
        ]);
        Empresa::create([
            'nombre' => 'Empresa de prueba',
            'email' => 'info@admin.com',
            'p1' => '58',
            'p2' => '94',
            'p3' => '67',
            'alto' => 60,
            'estado' => true
        ]);
    }
}
