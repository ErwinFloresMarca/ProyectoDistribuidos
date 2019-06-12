<?php

use Illuminate\Database\Seeder;

class ArbitrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('arbitros')->insert([
            'user'=>'arbitro',
            'password'=>'arbitro',
            'persona_id'=>'1',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
      ]);
    }
}
