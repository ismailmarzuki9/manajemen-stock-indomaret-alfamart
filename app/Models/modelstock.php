<?php

namespace App\Models;

use Database\Seeders\tblstock;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelstock extends Model
{
    use HasFactory;

    protected $table = 'stock';
    protected $primaryKey = 'stock_id'; // Set primary key ke Produk_id
    public $incrementing = false; // Jika primary key bukan auto-increment
    protected $keyType = 'string'; // Jika primary key adalah string

    protected $fillable = [
    'stock_id', 	
	'toko_id    ',
	'produk_id  ',
	'jumlah     ',
	'Produk_name',
	'created_at ',
	'updated_at '
    ];

    public function run()
    {
        // Panggil seeder KategoriSeeder
        $this->call(tblstock::class);
    }
}
