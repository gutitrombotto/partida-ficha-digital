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
        $role_secre = Role::where('nombre', 'secretariado')->first();
        $role_miembro  = Role::where('nombre', 'miembro')->first();

        factory(Usuario::class, 10)->create()->each(function ($u, $role_miembro) {
            $u->roles()->attach($role_miembro);
        });;



        $miembro = new Usuario();
        $miembro->nombre = 'Agustin Trombotto';
        $miembro->email = 'gutitrombotto@gmail.com';
        $miembro->dni = '39071116';
        $miembro->password = bcrypt('secret');
        $miembro->save();
        $miembro->roles()->attach($role_miembro);

        $secretariado = new Usuario();
        $secretariado->nombre = 'Franco Trombotto';
        $secretariado->email = 'frantrombotto@gmail.com';
        $secretariado->dni = '37125422';
        $secretariado->password = bcrypt('secret');
        $secretariado->save();
        $secretariado->roles()->attach($role_secre);
    }
}
