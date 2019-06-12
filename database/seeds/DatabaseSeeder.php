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
        $this->call(PersonasTableSeeder::class);
        $this->call(AdministradoresTableSeeder::class);
        $this->call(ArbitrosTableSeeder::class);
        $this->call(EquiposTableSeeder::class);

    }
}
