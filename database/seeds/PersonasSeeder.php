<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
//Para usar faker y poder genedad datos falsos
class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 100 ; $i++) { 
        	\DB::table('personas')->insert(array(

        		'ci'=> $faker -> buildingNumber, 
        		'nombre' => $faker-> firstNameFemale,
        		'ap_paterno' => $faker -> lastName,
        		'ap_materno' => $faker -> lastName,
        		'fecha_nacimiento' => $faker -> date($format = 'Y-m-d', $max = 'now'), 
        		'email' => $faker -> email
        		//'create_at' => date('Y-m-d H:m:s'),
        		//'update_at' => date('Y-m-d H:m:s')

        	));
        }
    }
}
