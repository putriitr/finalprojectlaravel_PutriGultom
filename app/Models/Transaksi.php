<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
   use HasFactory;
    protected $table='transaksi';
    protected $fillable=[
        'tanggal',
        'kode_transaksi',
        'kode_barang',
        'jumlah_beli',
        'total_harga',
        'discount',
        'total_penjualan',
    ];
    public function barang()
    {
        return $this->belongsTo(Barang::class,'kode_barang');
    }
}
