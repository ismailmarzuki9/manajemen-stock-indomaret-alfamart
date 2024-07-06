<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelkategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'categori_id'; // Set primary key ke Produk_id
    public $incrementing = false; // Jika primary key bukan auto-increment
    protected $keyType = 'string'; // Jika primary key adalah string

    protected $fillable = [
        'categori_id ',
        'categori_name',
        'description',
        'created_at',
        'updated_at'
    ];
}
