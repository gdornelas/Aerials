<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create('en_US');

        app('db')->statement('SET FOREIGN_KEY_CHECKS = 0;');
        app('db')->statement('truncate table passageiro;');
        app('db')->statement('truncate table telefone;');
        app('db')->statement('SET FOREIGN_KEY_CHECKS = 1;');

        for ($i=0; $i < 10; $i++) { 
        	$nome = $faker->name;
        	$cpf = strval($faker->randomNumber($nbDigits = 9, $strict = true));
        	$phone_count = random_int(1, 2);
        	$phones = [];
        	for ($j=0; $j < $phone_count; $j++) { 
        		array_push($phones, $faker->phoneNumber);
        	}

        	app('db')->insert('insert into passageiro values ('."\"".$cpf."\",\"".$nome."\");");
        	foreach ($phones as $numero) {
        		app('db')->insert('insert into telefone values('."\"".$cpf."\",\"".$numero."\");");
        	}
        }
    }
}
