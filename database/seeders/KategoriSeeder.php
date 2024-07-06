<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Ambil semua produk
        $products = DB::table('produk')->get();

        // Loop melalui setiap produk
        foreach ($products as $product) {
            // Check apakah kategori sudah ada
            $kategori = DB::table('kategori')->where('categori_id', $product->categori_id)->first();

            if (!$kategori) {
                // Jika kategori belum ada, buat kategori baru
                DB::table('kategori')->insert([
                    'categori_id' => $product->categori_id,
                    'categori_name' => Str::random(10), // Atau sesuai dengan kebutuhan Anda
                    'description' => Str::random(20), // Atau sesuai dengan kebutuhan Anda
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
