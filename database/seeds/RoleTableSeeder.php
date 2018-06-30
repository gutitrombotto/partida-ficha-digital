<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $rol_secre = new Role();
    $rol_secre->nombre = 'secretariado';
    $rol_secre->descripcion = 'Tiene derecho a gestionar todo';
    $rol_secre->save();

    $rol_miembro = new Role();
    $rol_miembro->nombre = 'padrino';
    $rol_miembro->descripcion = 'Miembro del movimiento que apadrina a quien hara la partida';
    $rol_miembro->save();

    $rol_miembro = new Role();
    $rol_miembro->nombre = 'ahijado';
    $rol_miembro->descripcion = 'Persona quien hará el retiro por primera vez';
    $rol_miembro->save();

    $rol_miembro = new Role();
    $rol_miembro->nombre = 'miembro';
    $rol_miembro->descripcion = 'Miembro Corriente del movimiento';
    $rol_miembro->save();
    }
}
