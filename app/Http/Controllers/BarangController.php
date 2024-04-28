<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function index()
    {
        $barang=Barang::get();
        return view('barang.index',['data'=>$barang]);

    }
    public function tambah()
    {
        return view('barang.form');
    }
    
    public function simpan(Request $request)
    {
    // Validasi data yang diterima dari request
    $request->validate([
        'kode_barang' => 'required',
        'nama_barang' => 'required',
        'gambar_barang' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Menentukan bahwa gambar harus diunggah
        'satuan' => 'required',
        'jumlah_stock' => 'required|integer',
        'harga' => 'required|numeric',
    ]);

    // Mengambil file gambar yang diunggah
    $gambar = $request->file('gambar_barang');

    // Menyimpan gambar ke dalam folder storage/app/public/gambar
    // dan menyimpan nama file ke dalam kolom gambar_barang
    $nama_gambar = $gambar->getClientOriginalName();
    $gambar->storeAs('public/post-image', $nama_gambar);

    // Membuat data yang akan disimpan ke dalam basis data
    $data = [
        'kode_barang' => $request->kode_barang,
        'nama_barang' => $request->nama_barang,
        'gambar_barang' => $nama_gambar, // Menyimpan nama file gambar
        'satuan' => $request->satuan,
        'jumlah_stock' => $request->jumlah_stock,
        'harga_satuan' => $request->harga,
    ];

    // Menyimpan data ke dalam basis data
    Barang::create($data);

    // Set pesan flash
    session()->flash('success', 'Barang berhasil disimpan.');
    // Mengarahkan kembali ke halaman daftar barang
    return redirect()->route('barang');
}

    public function update($id){
        $barang=Barang::where('id',$id)->first();
        return view('barang.form',['barang'=>$barang]);
    }
   
    public function edit($id, Request $request)
    {
    // Validasi data yang diterima dari request
    $request->validate([
        'kode_barang' => 'required',
        'nama_barang' => 'required',
        'gambar_barang' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Menentukan bahwa gambar harus diunggah
        'satuan' => 'required',
        'jumlah_stock' => 'required|integer',
        'harga' => 'required|numeric',
    ]);

    // Mengambil data barang yang akan disunting
    $barang = Barang::find($id);

    // Mengambil data yang diinputkan dari form
    $data = [
        'kode_barang' => $request->kode_barang,
        'nama_barang' => $request->nama_barang,
        'satuan' => $request->satuan,
        'jumlah_stock' => $request->jumlah_stock,
        'harga_satuan' => $request->harga,
    ];

    // Jika ada gambar yang diunggah, proses gambar tersebut
    if ($request->hasFile('gambar_barang')) {
        // Validasi dan proses pengunggahan gambar
        $request->validate([
            'gambar_barang' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menghapus gambar lama jika ada
        if ($barang->gambar_barang) {
            Storage::delete('public/post-image/' . $barang->gambar_barang);
        }

        // Menyimpan gambar baru
        $gambar = $request->file('gambar_barang');
        $nama_gambar = $gambar->getClientOriginalName();
        $gambar->storeAs('public/post-image', $nama_gambar);
        $data['gambar_barang'] = $nama_gambar;
    }

    // Menyunting data barang
    $barang->update($data);

    // Set pesan flash
    session()->flash('success', 'Barang berhasil diupdate.');

    // Mengarahkan kembali ke halaman daftar barang
    return redirect()->route('barang');
}

    public function delete($id)
{
    // Mengambil data barang yang akan dihapus
    $barang = Barang::find($id);

    // Jika ada gambar yang terkait, hapus gambar dari penyimpanan
    if ($barang->gambar_barang) {
        Storage::delete('public/post-image/' . $barang->gambar_barang);
    }

    // Hapus barang dari database
    $barang->delete();

    // Set pesan flash
    session()->flash('success', 'Barang berhasil dihapus.');

    // Mengarahkan kembali ke halaman daftar barang
    return redirect()->route('barang');
}

}
