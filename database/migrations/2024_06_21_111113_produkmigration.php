<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produkmigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //buat tabel produk
        Schema::create('produk', function (Blueprint $table){
            $table->uuid('Produk_id')->primary();
            $table->string('Produk_name');
            $table->char('categori_id')->constrained('kategori')->onDelete('cascade');
            $table->decimal('harga');
            $table->text('description');
            $table->char('SKU')->unique();;
            $table->string('brand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('produk');
    }
}
