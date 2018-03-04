<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Usuario::class, 1000)->create();
    }
}
