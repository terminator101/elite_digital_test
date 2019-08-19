<?php

use Illuminate\Database\Seeder;

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
        App\Developers::truncate();

        $faker = \Faker\Factory::create();

        //Create a random developers
        for ($i = 0; $i < 5; $i++) {
        	App\Developers::create([
        		'name' => $faker->name,
        		'type' => $faker->randomElement($array = array('frontend','backend')),
        	]);
        }
    }
}
