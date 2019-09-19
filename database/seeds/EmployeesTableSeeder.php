<?php

use App\Company;
use App\Employee;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::truncate();

        $companiesId = Company::all()->pluck('id')->toArray();
        $faker = \Faker\Factory::create();

        for ($i =0;$i<100;$i++) {
            Employee::create([
                'firstName'=> $faker->name,
                'lastName' => $faker->lastName,
                'com_id' => $faker->randomElement($companiesId),
                'email' => $faker->email,
                'phone' => $faker->phoneNumber
            ]);
        }
        //
    }
}
