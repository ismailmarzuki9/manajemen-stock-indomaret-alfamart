<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //buat tabel order
        Schema::create('order', function (Blueprint $table){
            $table->uuid('order_id')->primary();
            $table->char('toko_id')->constrained('toko')->onDelete('cascade');
            $table->char('supplier_id')->constrained('suppliers')->onDelete('cascade');
            $table->dateTime('order_date');
            $table->string('status');
            $table->integer('jumlah');
            $table->decimal('harga');
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
    }
}
