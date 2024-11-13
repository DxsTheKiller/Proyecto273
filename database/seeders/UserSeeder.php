<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //usuario administrador

        $rol = Role::create(['name'=>'administrador']);
        $rol = Role::create(['name' => 'artesano']);
        $rol = Role::create(['name' => 'cliente']);
        $rol = Role::create(['name' => 'repartidor']);
        
        // Asignar permisos específicos a cada rol
        $roles = [
            'artesano' => [
                'ver-miproducto', 'crear-producto', 'editar-producto', 'eliminar-producto',
            ],
            'cliente' => [
                'ver-productocomunidad', 'ver-mipedido', 'ver-carro', 'editar-carro', 'editar-mipedido', 'crear-direccion','asociar-direccion'
            ],
            'repartidor' => [
                'ver-pedidocomunidad', 'aceptar-pedido'
            ]
        ];
        
        // Asignar todos los permisos al administrador
        $adminRol = Role::where('name', 'administrador')->first();
        if ($adminRol) {
            $allPermissions = Permission::all(); // Obtener todos los permisos
            $adminRol->syncPermissions($allPermissions); // Asignar todos los permisos al administrador
        }
        
        // Asignar permisos específicos a los demás roles
        foreach ($roles as $rolName => $permisosRol) {
            $rol = Role::where('name', $rolName)->first(); // Buscar el rol
            if ($rol) {
                $permisos = Permission::whereIn('name', $permisosRol)->get(); // Buscar los permisos para ese rol
                $rol->syncPermissions($permisos); // Asignar los permisos al rol
            }
        }
        
        $user = User::create([
            
            'nombre'=> 'Danny',
            'apellido'=> 'Apaza',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('12345678'),
            'comunidad_id' => 1,
            
        ])->assignRole('administrador');
        $user = User::create([ 
             
            'nombre'=> 'Dennisy', 
            'apellido'=> 'Lopez', 
            'email'=> 'wasa@gmail.com', 
            'password'=> bcrypt('12345678'), 
            'comunidad_id' => 1,
             
        ])->assignRole('cliente');

        $user = User::create([ 

            'nombre'=> 'nayeli', 
            'apellido'=> 'sosa', 
            'email'=> 'nayelisosa@gmail.com', 
            'password'=> bcrypt('12345678'), 
            'comunidad_id' => 1,

        ])->assignRole('cliente');


       $user = User::create([ 
             
            'nombre'=> 'Laura', 
            'apellido'=> 'Fernandez', 
            'email'=> 'laura.fernandez@gmail.com', 
            'password'=> bcrypt('12345678'), 
            'comunidad_id' => 1,
             
        ])->assignRole('cliente');

        $user = User::create([ 
             
            'nombre'=> 'jorge', 
            'apellido'=> 'vargas', 
            'email'=> 'ljorgevargas@gmail.com', 
            'password'=> bcrypt('12345678'), 
            'comunidad_id' => 1,
             
        ])->assignRole('cliente');

        $user = User::create([ 
            'nombre'=> 'juan', 
            'apellido'=> 'perez', 
            'email'=> 'juanperez@gmail.com', 
            'password'=> bcrypt('12345678'), 
            'comunidad_id' => 1,
        ])->assignRole('cliente');

        $user = User::create([ 
            'nombre'=> 'carlos', 
            'apellido'=> 'garcia', 
            'email'=> 'carlosgarcia@gmail.com', 
            'password'=> bcrypt('12345678'), 
            'comunidad_id' => 1,
        ])->assignRole('cliente');

        $user = User::create([ 
            'nombre'=> 'luis', 
            'apellido'=> 'fernandez', 
             'email'=> 'luisfernandez@gmail.com',  
             'password'=> bcrypt('12345678'), 
             'comunidad_id' => 1,
         ])->assignRole('cliente');

        $user = User::create([ 
            'nombre'=> 'Pedro', 
            'apellido'=> 'Mamani', 
            'email'=> 'pedro.mamani@gmail.com', 
            'password'=> bcrypt('12345678'), 
            'comunidad_id' => 1,
        ])->assignRole('artesano');

        $user = User::create([ 
            'nombre'=> 'Ana', 
            'apellido'=> 'Huanca', 
            'email'=> 'ana.huanca@gmail.com', 
            'password'=> bcrypt('12345678'), 
            'comunidad_id' => 1,
        ])->assignRole('artesano');

        $user = User::create([ 
            'nombre'=> 'Luis', 
            'apellido'=> 'Choque', 
            'email'=> 'luis.choque@gmail.com', 
            'password'=> bcrypt('12345678'),
            'comunidad_id' => 1, 
        ])->assignRole('artesano');

        $user = User::create([ 
            'nombre'=> 'Rosa', 
            'apellido'=> 'Quispe', 
            'email'=> 'rosa.quispe@gmail.com', 
            'password'=> bcrypt('12345678'), 
            'comunidad_id' => 1,
        ])->assignRole('artesano');

        $user = User::create([ 
            'nombre'=> 'Carmen', 
            'apellido'=> 'Lopez', 
            'email'=> 'carmen.lopez@gmail.com', 
            'password'=> bcrypt('12345678'),
            'comunidad_id' => 1, 
        ])->assignRole('artesano');

        $user = User::create([ 
            'nombre'=> 'Miguel', 
            'apellido'=> 'Cusi', 
            'email'=> 'miguel.cusi@gmail.com', 
            'password'=> bcrypt('12345678'),
            'comunidad_id' => 1, 
        ])->assignRole('artesano');

        $user = User::create([ 
            'nombre'=> 'Juana', 
            'apellido'=> 'Callisaya', 
            'email'=> 'juana.callisaya@gmail.com', 
            'password'=> bcrypt('12345678'),
            'comunidad_id' => 1,
        ])->assignRole('artesano');

        $user = User::create([
            'nombre' => 'Carlos',
            'apellido' => 'Martinez',
            'email' => 'carlos.martinez@gmail.com',
            'password' => bcrypt('12345678'),
            'comunidad_id' => 1, // Comunidad de Los Andes
        ])->assignRole('repartidor');

        $user = User::create([
            'nombre' => 'Sofia',
            'apellido' => 'Hernandez',
            'email' => 'sofia.hernandez@gmail.com',
            'password' => bcrypt('12345678'),
            'comunidad_id' => 1, // Comunidad de El Alto
        ])->assignRole('repartidor');

       $user = User::create([
            'nombre' => 'Pedro',
            'apellido' => 'Lopez',
            'email' => 'pedro.lopez@gmail.com',
            'password' => bcrypt('12345678'),
            'comunidad_id' => 1, // Comunidad de Tiquipaya
        ])->assignRole('repartidor');

        $user = User::create([
            'nombre' => 'Laura',
            'apellido' => 'Gonzalez',
            'email' => 'laura.gonzalez@gmail.com',
            'password' => bcrypt('12345678'),
            'comunidad_id' => 1, // Comunidad de Copacabana
        ])->assignRole('repartidor');

        $user = User::create([
            'nombre' => 'Javier',
            'apellido' => 'Ramirez',
            'email' => 'javier.ramirez@gmail.com',
            'password' => bcrypt('12345678'),
            'comunidad_id' => 1, // Comunidad de Coroico
        ])->assignRole('repartidor');

       $user = User::create([
            'nombre' => 'Natalia',
            'apellido' => 'Fernandez',
            'email' => 'natalia.fernandez@gmail.com',
            'password' => bcrypt('12345678'),
            'comunidad_id' => 1, // Comunidad de Vallegrande
        ])->assignRole('repartidor');

        $user = User::create([
            'nombre' => 'Roberto',
            'apellido' => 'Alvarado',
            'email' => 'roberto.alvarado@gmail.com',
            'password' => bcrypt('12345678'),
            'comunidad_id' => 1, // Comunidad de Achocalla
        ])->assignRole('repartidor');

    }
}
