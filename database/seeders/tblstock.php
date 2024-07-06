<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class tblstock extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pengenalan faker untuk data-data di Indonesia
        $faker = Faker::create('id_ID');

        // Ambil semua produk dan toko
        $products = DB::table('produk')->get();
        $tokos = DB::table('toko')->get();


        // Loop melalui setiap produk dan toko
        foreach ($products as $product) {
            foreach ($tokos as $toko) {
                // Check apakah stock sudah ada
                $stock = DB::table('stock')
                    ->where('produk_id', $product->Produk_id)
                    ->where('toko_id', $toko->toko_id)
                    ->first();

                if (!$stock) {
                    // Jika stock belum ada, buat stock baru
                    DB::table('stock')->insert([
                        'stock_id'   =>$faker->regexify('STC[0-9]{3}'),
                        'produk_id'  => $product->Produk_id,
                        'toko_id'    => $toko->toko_id,
                        'jumlah'     => $faker->numberBetween(10, 80),
                        'produk_name'=> $product->Produk_name,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
