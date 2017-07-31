<?php

use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create();

        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('students')->insert([ 
                'name' => $faker->name,
                'address' => $faker->address,
                'gender' => $faker->randomElement(['male' ,'female', 'other']),
                'passing_year' => $faker->numberBetween(2000,2017),
                'updated_at' => date("Y-m-d H:i:s"),              
            ]);
        }
    }
}
