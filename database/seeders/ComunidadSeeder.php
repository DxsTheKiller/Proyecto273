<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComunidadSeeder extends Seeder
{
    public function run()
    {
        DB::table('comunidades')->insert([
            [
                'nombre' => 'Achocalla',
                'ubicacion' => 'La Paz, Bolivia',
                'descripcion' => 'Comunidad conocida por sus tradiciones culturales y festividades.',
            ],
            [
                'nombre' => 'Palca',
                'ubicacion' => 'La Paz, Bolivia',
                'descripcion' => 'Ubicada en el valle, famosa por su agricultura y belleza natural.',
            ],
            [
                'nombre' => 'Sica Sica',
                'ubicacion' => 'La Paz, Bolivia',
                'descripcion' => 'Comunidad agrícola con una rica herencia andina.',
            ],
            [
                'nombre' => 'Laja',
                'ubicacion' => 'La Paz, Bolivia',
                'descripcion' => 'Conocida por su arquitectura colonial y su historia.',
            ],
            [
                'nombre' => 'Chulumani',
                'ubicacion' => 'La Paz, Bolivia',
                'descripcion' => 'Famosa por sus plantaciones de té y paisajes montañosos.',
            ],
            [
                'nombre' => 'Sorata',
                'ubicacion' => 'La Paz, Bolivia',
                'descripcion' => 'Un destino turístico popular por su belleza natural.',
            ],
            [
                'nombre' => 'Viacha',
                'ubicacion' => 'La Paz, Bolivia',
                'descripcion' => 'Conocida por su crecimiento industrial y comercial.',
            ],
            [
                'nombre' => 'Tihuanaco',
                'ubicacion' => 'La Paz, Bolivia',
                'descripcion' => 'Famosa por sus ruinas arqueológicas y su historia milenaria.',
            ],
            // Añade más comunidades según sea necesario
        ]);
    }
}
