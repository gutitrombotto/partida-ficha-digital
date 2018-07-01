<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        // User seeder will use the roles above created.
        $this->call(UsersTableSeeder::class);
        $this->call(TipoPreguntasSeeder::class);
        $this->call(PreguntasSeeder::class);
    }
}
