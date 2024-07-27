<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 3; $i++) {
            $faker = Faker::create();
            $student = new Student();
            $student->name = $faker->name;
            $student->email = $faker->email;
            $student->age = $faker->randomDigit();
            $student->country = $faker->country;
            $student->save();
        }
    }
}
