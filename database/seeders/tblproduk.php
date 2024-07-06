<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class tblproduk extends Seeder
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

        // for ($i=0; $i < 10; $i++) { 
        //     DB::table('produk')->insert([
        //         'Produk_id'     =>$faker->regexify('[A-Z]{5}[0-4]{3}'),
        //         'Produk_name'   =>$faker->word(),
        //         'categori_id'   =>$faker->regexify('[KAT]{5}[4-9]{3}'),
        //         'harga'         =>$faker->numberBetween($min = 500, $max = 8000),
        //         'description'   =>$faker->words(4, true),
        //         'SKU'           =>$faker->ean13(),
        //         'brand'           =>$faker->company(),

        //     ]);
        // }

        for ($i=0; $i < 10; $i++) { 
            DB::table('suppliers')->insert([
                'supplier_id'     =>$faker->regexify('[A-Z]{5}[0-4]{3}'),
                'supplier_name'   =>$faker->name(),
                'contac_info'   =>$faker->phoneNumber(),
            ]);
        }

    }
}
