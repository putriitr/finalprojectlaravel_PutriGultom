<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
   use HasFactory;
    protected $table='barang';
    protected $fillable=[
        'kode_barang',
        'nama_barang',
        'gambar_barang',
        'satuan',
        'jumlah_stock',
        'harga_satuan'
    ];
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class,'id');
    }
}
