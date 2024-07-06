<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderModle extends Model
{
    use HasFactory;
    
    protected $table = 'order';
    protected $primaryKey = 'order_id'; // Set primary key ke Produk_id
    public $incrementing = false; // Jika primary key bukan auto-increment
    protected $keyType = 'string'; // Jika primary key adalah string

    protected $fillable = [
        'order_id', 	
        'toko_id', 	
        'supplier_id', 	
        'order_date', 	 	
        'status', 	
        'jumlah', 			
        'harga', 	
        'created_at',
        'updated_at', 
    ];

    // protected $hidden = [
    //     'order_id', 	
    //     'toko_id', 	
    //     'supplier_id',
    // ];
}
