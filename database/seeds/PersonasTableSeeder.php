<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('personas')->insert([
            'ci'=>'54321678',
            'nombre'=>'Juan',
            'ap_paterno'=>'Mamani',
            'ap_materno'=>'Mamani',
            'email'=> 'juan@gmail.com',
            'fecha_nacimiento'=> '1997-05-23',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
      ]);
    }
}
