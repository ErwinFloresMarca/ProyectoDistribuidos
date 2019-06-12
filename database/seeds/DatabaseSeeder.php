<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this -> call('PersonasSeeder');
        $this->call(AdministradoresTableSeeder::class);
        $this->call(ArbitrosTableSeeder::class);
        $this->call(EquiposTableSeeder::class);
    }
}
