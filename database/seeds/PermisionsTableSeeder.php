<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'  =>  'Navegar usuarios',
            'slug'  =>  'users.index',
            'description'   =>  'Lista y navega de todos los usuarios',
        ]);
        Permission::create([
                    'name'  =>  'Detalle usuarios',
                    'slug'  =>  'users.show',
                    'description'   =>  'Ver detalle de todos los usuarios',
                ]);

        Permission::create([
                    'name'  =>  'Editar usuarios',
                    'slug'  =>  'users.edit',
                    'description'   =>  'Editar todos los usuarios',
                ]);
        Permission::create([
                     'name'  =>  'Eliminar usuarios',
                     'slug'  =>  'users.delete',
                     'description'   =>  'Eliminar todos los usuarios',
                 ]);

        //ROLES
         Permission::create([
                    'name'  =>  'Navegar roles',
                    'slug'  =>  'roles.index',
                    'description'   =>  'Lista y navega de todos los roles',
                ]);
        Permission::create([
            'name'  =>  'Detalle roles',
            'slug'  =>  'roles.show',
            'description'   =>  'Ver detalle de todos los roles',
        ]);
        Permission::create([
            'name'  =>  'Crear roles',
            'slug'  =>  'roles.create',
            'description'   =>  'Crear roles',
        ]);
        Permission::create([
            'name'  =>  'Editar roles',
            'slug'  =>  'roles.edit',
            'description'   =>  'Editar todos los roles',
        ]);
        Permission::create([
             'name'  =>  'Eliminar rol',
             'slug'  =>  'roles.destroy',
             'description'   =>  'Eliminar todos los roles',
         ]);

         //PRODUCTOS
         Incidencias::create([
             'name'  =>  'Navegar incidencias',
             'slug'  =>  'incidencias.index',
             'description'   =>  'Lista y navega de todos los incidencias',
         ]);
         Incidencias::create([
             'name'  =>  'Detalle incidencias',
             'slug'  =>  'incidencias.show',
             'description'   =>  'Ver detalle de todos los incidencias',
         ]);
         Incidencias::create([
             'name'  =>  'Crear incidencias',
             'slug'  =>  'incidencias.create',
             'description'   =>  'Crear incidencias',
         ]);
         Incidencias::create([
             'name'  =>  'Editar incidencias',
             'slug'  =>  'incidencias.edit',
             'description'   =>  'Editar todos los incidencias',
         ]);
         Incidencias::create([
              'name'  =>  'Eliminar incidencias',
              'slug'  =>  'incidencias.destroy',
              'description'   =>  'Eliminar todos los incidencias',
          ]);
    }
}
