<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suppliersModel extends Model
{
    use HasFactory;

    
    protected $table = 'suppliers';
    protected $primaryKey = 'supplier_id'; // Set primary key ke Produk_id
    public $incrementing = false; // Jika primary key bukan auto-increment
    protected $keyType = 'string'; // Jika primary key adalah string

    protected $fillable = [
                'supplier_id',  	
	            'supplier_name',
	            'contac_info',
	            'created_at',
	            'updated_at'
    ];
}
