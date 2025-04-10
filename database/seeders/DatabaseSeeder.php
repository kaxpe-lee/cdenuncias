<?php

namespace Database\Seeders;

use App\Models\Conciencia;
use App\Models\Estado;
use App\Models\User;
use App\Models\Relacion;
use App\Models\Tercero;
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

        User::factory()->create([
            'name' => 'admin',
            'surname' => '',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $this->call(EmpresaSeeder::class);

        // User::factory(10)->create();
        Estado::insert([
            ['nombre' => 'Iniciado'],
            ['nombre' => 'En curso'],
            ['nombre' => 'Procesada'],
            ['nombre' => 'Inactivo'],
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

        Relacion::insert([
            ['nombre' => 'Empleado'],
            ['nombre' => 'Proveedor'],
            ['nombre' => 'Socio'],
            ['nombre' => 'Ex-empleado'],
            ['nombre' => 'Otros'],
        ]);

        Tercero::insert([
            ['nombre' => 'Si'],
            ['nombre' => 'No'],
            ['nombre' => 'No sabe']
        ]);
    }
}
