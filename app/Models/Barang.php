<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Barang extends Model
{
    use HasFactory;
    protected $table = 'tb_barang';
    protected $fillable = [
        'kd_barang',
        'nama_barang',
        'stok_awal',
        'barang_masuk',
        'barang_keluar',
        'stok_akhir',
    ];
}