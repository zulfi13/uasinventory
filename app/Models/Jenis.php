<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    use HasFactory;
    protected $table='table_jenis_barang';
    protected $fillable = [
        'kode_barang',
        'jenis_barang'

    ];
}
