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
    $rol_secre->name = 'secretariado';
    $rol_secre->description = 'Tiene derecho a gestionar todo';
    $rol_secre->save();
    
    $rol_miembro = new Role();
    $rol_miembro->name = 'miembro';
    $rol_miembro->description = 'Miembro del movimiento tanto padrino como ahijados';
    $rol_miembro->save();
    }
}
