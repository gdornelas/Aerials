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
        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) { 
        	app('db')->insert('insert into passageiro values ('."\"".strval($faker->randomNumber($nbDigits = 9, $strict = true))."\",\"".$faker->name."\");");
        }
    }
}
