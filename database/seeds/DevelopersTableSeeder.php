<?php

use Illuminate\Database\Seeder;

use App\Developer;

class DevelopersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Remove existing records
        Developer::truncate();

        $faker = \Faker\Factory::create();

        //Create random developers
        for ($i = 0; $i < 5; $i++) {
        	Developer::create([
        		'name' => $faker->name,
        		'type' => $faker->randomElement($array = array('frontend','backend')),
        	]);
        }
    }
}
