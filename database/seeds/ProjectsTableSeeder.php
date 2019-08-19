<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Remove existing records
        App\Projects::truncate();

        $faker = \Faker\Factory::create();

        //Create random projects
        for ($i = 0; $i < 5; $i++) {
        	App\Projects::create([
        		'name' => $faker->word,
        		'client_name' => $faker->company,
        		'lead_developer_id' => $faker->unique()->randomDigitNotNull,
        	]);
        }
    }
}