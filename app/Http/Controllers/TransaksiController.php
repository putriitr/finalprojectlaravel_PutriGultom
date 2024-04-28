<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{  
    public function index(){
    $transaksi=Transaksi::get();
    
    // return view('transaksi.index', ['data' => $data, 'transaksi' => $transaksi]);   
    return view('transaksi.index',['data'=>$transaksi]);
    }
    public function tambah(){
        $barang=Barang::get();
    
        return view('transaksi.form',['barang'=>$barang]);
    }
    public function simpan(Request $request)
    {
    $barang=Barang::get();

    $data2 = [ 
                'tanggal' => $request['tanggal'],
                'kode_transaksi' => $request['kode_transaksi'],
                'kode_barang' => $request['kode_barang'],
                'jumlah_beli' => $request['jumlah_beli'],
                'total_harga' => $request['total_harga'],
                'discount' => $request['discount'],
                'total_penjualan' => $request['total_penjualan'],
    ];
      // Cek stok barang yang tersedia
      $barang = Barang::findOrFail($request['kode_barang']);
      if ($barang->jumlah_stock < $request['jumlah_beli']) {
          // Jika stok tidak mencukupi, kembalikan dengan pesan validasi
          return redirect()->back()->withInput()->withErrors(['jumlah_beli' => 'Stok barang tidak mencukupi.']);
      }
$barang->jumlah_stock -= $request['jumlah_beli'];
$barang->save();
    // Menyimpan data ke dalam basis data
    Transaksi::create($data2);
             
    // Mengarahkan kembali ke halaman daftar barang
    return redirect()->route('transaksi');
}
public function update($id)
{
    // Mengambil data transaksi yang akan di-edit
    $transaksi = Transaksi::findOrFail($id);
    $barang = Barang::all();
    return view('transaksi.form', ['transaksi' => $transaksi, 'barang' => $barang]);
}

public function edit(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'jumlah_beli' => 'required|numeric|min:1',
        
    ]);

    // Mengambil data transaksi yang akan di-update
    $transaksi = Transaksi::findOrFail($id);

   

    // Cek stok barang yang tersedia
    $barang = Barang::findOrFail($request->kode_barang);
    if ($barang->jumlah_stock < $request->jumlah_beli) {
        // Jika stok tidak mencukupi, kembalikan dengan pesan validasi
        return redirect()->back()->withInput()->withErrors(['jumlah_beli' => 'Stok barang tidak mencukupi.']);
    }

    // Mengurangi stok barang
    $barang->decrement('jumlah_stock', $request->jumlah_beli);

     // Kembalikan jumlah stok barang yang sebelumnya dikurangi
     $barang = Barang::findOrFail($transaksi->kode_barang);
     $barang->jumlah_stock += $transaksi->jumlah_beli;
     $barang->save();

    // Menyimpan data transaksi yang telah di-update
    $transaksi->update($request->all());

     // Set pesan flash
     session()->flash('success', 'Transaksi berhasil diupdate.');

    // Mengarahkan kembali ke halaman daftar transaksi
    return redirect()->route('transaksi');
}

public function delete($id) {
    // Temukan transaksi yang akan dihapus
    $transaksi = Transaksi::findOrFail($id);
    
    // Kembalikan jumlah stok barang yang sebelumnya dikurangi
    $barang = Barang::findOrFail($transaksi->kode_barang);
    $barang->jumlah_stock += $transaksi->jumlah_beli;
    $barang->save();
    
    // Hapus transaksi
    $transaksi->delete();

     // Set pesan flash
     session()->flash('success', 'Transaksi berhasil dihapus.');
    
    // Redirect atau tampilkan pesan sukses
    return redirect()->route('transaksi');
}
    }

