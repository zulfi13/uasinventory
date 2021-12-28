<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'table_data_barang';
    protected $fillable = [
        'nama_barang',
        'tanggal_produksi',
        'tanggal_expired',
        'stok',
        'harga',

    ];

}
