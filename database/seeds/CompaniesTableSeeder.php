<?php

use App\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('companies')->delete();

        $faker = \Faker\Factory::create();

        for ($i =0;$i<100;$i++) {
            Company::create([
                'name'=> $faker->sentence,
                'logo' => $faker->imageUrl(),
                'email' => $faker->email,
                'website' => $faker->url
            ]);
        }
        //
    }
}
