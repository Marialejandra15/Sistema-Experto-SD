<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create([ 'name' => 'Admin' ]);
        $role1->permissions()->attach([1,2,3,4,5,6,7,8,9,10,11]);

        $role2 = Role::create([ 'name' => 'Instructor' ]);
        $role2->syncPermissions([
            'Crear cursos','Leer cursos','Actualizar cursos','Eliminar cursos'
        ]);
    }
}
