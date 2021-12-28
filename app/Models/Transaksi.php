<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table='table_data_transaksi';
    protected $fillable = [
       'tanggal_transaksi',
       'jumlah_barang_masuk',
       'jumlah_barang_keluar',
       'total_pendapatan'

    ];
}
