<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeltoko extends Model
{
    use HasFactory;

    protected $table = 'toko';
    protected $primaryKey = 'toko_id'; // Set primary key ke Produk_id
    public $incrementing = false; // Jika primary key bukan auto-increment
    protected $keyType = 'string'; // Jika primary key adalah string

    protected $fillable = [
                'toko_id', 	
                'toko_name',
                'toko_type',
                'location',
                'created_at',	 
                'updated_at'
    ];
}
