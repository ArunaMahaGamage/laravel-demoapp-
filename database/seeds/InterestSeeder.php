<?php

use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 20;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('interests')->insert([ 
                'name' => $faker->randomElement(['Banking','Bioengineering','biomedical engineering & clinical engineering',   'Biological sciences',
    'Biology',    'Biotechnologies',    'Botany',    'British & Irish history',    'Buddhism',
    'Building & construction', 'Business studies']),
                'updated_at' => date("Y-m-d H:i:s"),              
            ]);
        }
    }
}
