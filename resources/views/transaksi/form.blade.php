@extends('layout.main')
@section('title','Form Transaksi')
@section('content')
<form action="{{ isset($transaksi)?route('transaksi.tambah.edit',$transaksi->id):route('transaksi.tambah.simpan') }}"
     method="POST">
    @csrf
    @if(isset($transaksi))
        @method('PUT')
    @endif
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Transaksi Barang</h6>
         </div>
         @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
         @endif
         <div class="card-body">
            <div class="form-group">
                <label for="kode_transaksi">Kode Transaksi</label>
                <input type="text" class="form-control" id="kode_transaksi" name="kode_transaksi" 
                value="{{ isset($transaksi) ? $transaksi->kode_transaksi : generateNewCode() }}" readonly>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" 
                value="{{ isset($transaksi) ? $transaksi->tanggal :''}}">
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <select name="kode_barang" id="kode_barang" class="custom-select" onchange="updateHarga()">
                   <option value="" selected disabled hidden>-----Pilih Barang-----</option>
                    
                   @foreach ($barang as $row)
                <option value="{{ $row->id }}" {{ isset($transaksi) && $transaksi->kode_barang == $row->id ? 'selected' : '' }} data-harga="{{ $row->harga_satuan }}">{{ $row->nama_barang }}</option>
                  @endforeach
                </select>
            </div>
            
            <!-- Harga Satuan -->
            <input type="hidden" id="harga_satuan" name="harga_satuan" 
       value="{{ isset($transaksi) ? $transaksi->barang->harga_satuan : '' }}">

             
            <!-- Input jumlah beli -->
            <div class="form-group">
                <label for="jumlah_beli">Jumlah Beli</label>
                <input type="number" class="form-control" id="jumlah_beli" name="jumlah_beli" 
                value="{{ isset($transaksi)? $transaksi->jumlah_beli:''}}" onchange="calculateTotal()">
            </div>
            
            <!-- Input total harga -->
            <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input type="number" class="form-control" id="total_harga" name="total_harga" 
                value="{{ isset($transaksi)?$transaksi->total_harga:'' }}" readonly>
            </div>
            
            <!-- Input discount -->
            <div class="form-group">
                <label for="discount">Discount</label>
                <input type="number" class="form-control" id="discount" name="discount" 
                value="{{ isset($transaksi)?$transaksi->discount:'' }}" readonly>
            </div>
            
            <!-- Input total penjualan -->
            <div class="form-group">
                <label for="total_penjualan">Total Penjualan</label>
                <input type="number" class="form-control" id="total_penjualan" name="total_penjualan" 
                value="{{ isset($transaksi)?$transaksi->total_penjualan:'' }}"readonly>
            </div>
         </div>
         
         <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
         </div>
        </div>
    </div>
</div>
</form>

<script>
    function updateHarga() {
        var selectedIndex = document.getElementById('kode_barang').selectedIndex;
        var harga = document.getElementById('kode_barang').options[selectedIndex].getAttribute('data-harga');
        document.getElementById('harga_satuan').value = harga;
        calculateTotal();
    }

    function calculateTotal() {
        var jumlah_beli = document.getElementById('jumlah_beli').value;
        var harga = document.getElementById('harga_satuan').value;
        var discount = document.getElementById('discount');
        var total_harga = document.getElementById('total_harga');
        var total_penjualan = document.getElementById('total_penjualan');

        if (parseInt(jumlah_beli) > 10) {
            var diskon = (0.05 * parseInt(harga)) * parseInt(jumlah_beli);
            discount.value = diskon;
            total_harga.value = parseInt(harga) * parseInt(jumlah_beli);
            total_penjualan.value = (parseInt(harga) * parseInt(jumlah_beli)) - diskon;
        } else {
            discount.value = 0;
            total_harga.value = parseInt(harga) * parseInt(jumlah_beli);
            total_penjualan.value =  parseInt(harga) * parseInt(jumlah_beli);
        }
    }
</script>

@endsection
@php
function generateNewCode() {
    // Mendapatkan ID terakhir dari tabel barang
    $lastId = \App\Models\Transaksi::max('id');
    // Membuat kode baru dengan awalan 'P-' dan ID terakhir ditambah 1
    $newCode = 'T-' . ($lastId + 1);
    return $newCode;
}
@endphp
