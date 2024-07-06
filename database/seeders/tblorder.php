<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class tblorder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Pengenalan faker untuk data-data di Indonesia
        $faker = Faker::create('id_ID');
        // Ambil semua produk
        $products = DB::table('toko')->get();
        $suppliers = DB::table('suppliers')->get();

        // var_dump($suppliers);

        $status_choices = ['pending', 'sending', 'completed'];
        

        // Loop melalui setiap produk
        foreach ($products as $product) {
            foreach ($suppliers as $supplier) {
                 // Check apakah order sudah ada
            $order = DB::table('order')
                    ->where('toko_id', $product->toko_id)
                    ->where('supplier_id', $supplier->supplier_id)
                    ->first();

            if (!$order) {
                // Jika order belum ada, buat order baru
                DB::table('order')->insert([
                    'order_id'    => $faker->asciify('order****'),
                    'toko_id'     => $product->toko_id,
                    'supplier_id' => $supplier->supplier_id,
                    'order_date'  => $faker->dateTime(),
                    'status'      => $status_choices[rand(0,2)],
                    'jumlah'      => $faker->numberBetween(2,100),
                    'harga'      => $faker->numberBetween(2,100),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            
           
        }
    }
    }
}
