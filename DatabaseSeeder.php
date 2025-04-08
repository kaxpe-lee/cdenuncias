<?php

namespace Database\Seeders;

use App\Models\Conciencia;
use App\Models\Estado;
use App\Models\Relation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Estado::insert([
            ['nombre' => 'Iniciado','descripcion' => 'Estado por defecto al dar de alta una denuncia'],
            ['nombre' => 'En curso','descripcion' => 'Denuncia en curso'],
            ['nombre' => 'Procesada','descripcion' => 'Denuncia concluida'],
            ['nombre' => 'Inactivo','descripcion' => 'Denuncia inactiva'],
        ]);

        Conciencia::insert([
            ['nombre' => 'Me ha sucedido a mí'],
            ['nombre' => 'Lo vi'],
            ['nombre' => 'Lo escuché'],
            ['nombre' => 'Me lo contó un compañero de trabajo'],
            ['nombre' => 'Un tercero me lo contó'],
            ['nombre' => 'Por accidente'], 
            ['nombre' => 'Estaba investigando']
        ]);

        Relation::insert([
            ['nombre' => 'Empleado'],
            ['nombre' => 'Proveedor'],
            ['nombre' => 'Socio'],
            ['nombre' => 'Ex-empleado'],
            ['nombre' => 'Otros'],
        ]);
        
        $this->call(EmpresaSeeder::class);

        User::factory()->create([
            'name' => 'Grupo Asesor Ros',
            'email' => 'info@rosgrupoasesor.com',
            'password' => bcrypt('garos2000?')
        ]);
    }
}
