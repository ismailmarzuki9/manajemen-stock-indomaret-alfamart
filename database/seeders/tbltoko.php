<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class tbltoko extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = faker::create(('Id_ID'));

        for ($i=0; $i < 10; $i++) { 
            DB::table('toko')->insert([
                'toko_id'     =>$faker->regexify('[A-Z]{5}[0-4]{3}'),
                'toko_name'   =>$faker->name(),
                'toko_type'   =>$faker->company(),
                'location'    =>$faker->city(),

            ]);
        }
    }
}
