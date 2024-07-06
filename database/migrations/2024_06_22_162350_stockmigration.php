<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Stockmigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('stock',function(Blueprint $table){
            $table->uuid('stock_id')->primary();
            $table->char('toko_id')->constrained('toko')->onDelete('cascade');
            $table->char('produk_id')->constrained('produk')->onDelete('cascade');
            $table->integer('jumlah');
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
        Schema::dropIfExists('stock');
    }
}
