<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {

            DB::table('person')->insert([
                'name' => $faker->name,
                'mobile' => $faker->phoneNumber,
                'address' => $faker->address
            ]);
        }
    }
}
