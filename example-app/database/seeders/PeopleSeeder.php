<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($j=0;$j<50;$j++)
        {
            DB::table('people')->insert([
                'name'=>Str::random(100),
                'surname'=>Str::random(100),
                'telephone-number'=>rand(100000000,999999999),
                'street'=>Str::random(100),
                'city'=>Str::random(100),
                'country'=>Str::random(100)
            ]);
        }
    }
}
