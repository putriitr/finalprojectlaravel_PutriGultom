@extends('layout.main')

@section('title','Form Barang')

@section('content')
<form action="{{ isset($barang)?route('barang.tambah.edit',$barang->id):route('barang.tambah.simpan') }}" 
    method="POST" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ isset($barang)?'Form Update Barang':'Form Tambah Barang' }}</h6>
         </div>

         <div class="card-body">
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
              
                <input type="text" class="form-control" id="kode_barang" name="kode_barang" 
                value="{{ isset($barang) ? $barang->kode_barang : generateNewCode() }}" readonly>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" 
                value="{{ isset($barang) ? $barang->nama_barang : '' }}">
            </div>
           
            <div class="form-group">
                <label for="gambar_barang">Gambar Barang</label>
                <input type="file" class="form-control-file" id="gambar_barang" name="gambar_barang">
                @if(isset($barang) && $barang->gambar_barang)
                    <img src="{{ asset('storage/post-image/' . $barang->gambar_barang) }}" alt="Gambar Barang" style="max-width: 200px;">
                @endif
            </div>
            <div class="form-group">
                <label for="satuan">Satuan</label>
                <select class="form-control" id="satuan" name="satuan">
                    <option value="">Pilih Satuan</option>
                    <option value="UNIT" {{ isset($barang) && $barang->satuan == 'UNIT' ? 'selected' : '' }}>UNIT</option>
                    <option value="PCS" {{ isset($barang) && $barang->satuan == 'PCS' ? 'selected' : '' }}>PCS</option>
                    <option value="BOX" {{ isset($barang) && $barang->satuan == 'BOX' ? 'selected' : '' }}>BOX</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="jumlah_stock">Jumlah Stock</label>
                <input type="number" class="form-control" id="jumlah_stock" name="jumlah_stock" 
                value="{{ isset($barang) ? $barang->jumlah_stock : '' }}">
            </div>
            <div class="form-group">
                <label for="harga">Harga Satuan</label>
                <input type="number" class="form-control" id="harga" name="harga" 
                value="{{ isset($barang) ? $barang->harga_satuan : '' }}">
            </div>
         </div>
         <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
         </div>

        </div>
    </div>
</div>
</form>
@endsection

@php
function generateNewCode() {
    // Mendapatkan ID terakhir dari tabel barang
    $lastId = \App\Models\Barang::max('id');

    // Membuat kode baru dengan awalan 'P-' dan ID terakhir ditambah 1
    $newCode = 'P-' . ($lastId + 1);

    return $newCode;
}
@endphp