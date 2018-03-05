<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Usuario::class, 1000)->create();
        $role_secre = Role::where('name', 'secretariado')->first();
        $role_miembro  = Role::where('name', 'miembro')->first();
        
        $miembro = new Usuario();
        $miembro->nombre = 'Agustin Trombotto';
        $miembro->email = 'gutitrombotto@gmail.com';
        $miembro->dni = '39071116';
        $miembro->password = bcrypt('secret');
        $miembro->codigo_activacion =  str_random(50);
        $miembro->save();
        $miembro->roles()->attach($role_miembro);

        $secretariado = new Usuario();
        $secretariado->nombre = 'Franco Trombotto';
        $secretariado->email = 'frantrombotto@gmail.com';
        $secretariado->dni = '37125422';
        $secretariado->password = bcrypt('secret');
        $secretariado->codigo_activacion =  str_random(50);
        $secretariado->save();
        $secretariado->roles()->attach($role_secre);
    }
}
