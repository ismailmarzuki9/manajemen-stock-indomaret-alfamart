<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelproduct extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'Produk_id'; // Set primary key ke Produk_id
    public $incrementing = false; // Jika primary key bukan auto-increment
    protected $keyType = 'string'; // Jika primary key adalah string

    protected $fillable = [
        'Produk_id',
        'Produk_name',
        'categori_id',
        'harga',
        'description',
        'SKU',
        'brand',
        'created_at',
        'updated_at'
    ];

}
