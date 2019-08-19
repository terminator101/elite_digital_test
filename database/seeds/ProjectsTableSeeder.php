<?php

use Illuminate\Database\Seeder;

use App\Project;

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
        Project::truncate();

        $faker = \Faker\Factory::create();

        //Create random projects
        for ($i = 0; $i < 5; $i++) {
        	Project::create([
        		'name' => $faker->word,
        		'client_name' => $faker->company,
        		'lead_developer_id' => $faker->unique()->randomDigitNotNull,
        	]);
        }
    }
}