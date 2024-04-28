@extends('layout.main')

@section('title','Form Barang')

@section('content')
<style>
    .card-container {
        max-height: 400px; /* Atur tinggi maksimum container sesuai kebutuhan Anda */
        overflow-y: auto; /* Mengatur overflow secara vertikal */
    }
   

    .card-img {
        width: 100%; /* Menjadikan gambar memenuhi lebar card */
        height: auto; /* Mengatur tinggi gambar sesuai dengan rasio aspeknya */
        margin-top: 10px;
    }
    .card-title {
        font-size: 16px; /* Atur ukuran teks untuk judul card (h5) */
    }

    .card-text {
        font-size: 14px; /* Atur ukuran teks untuk isi card (p) */
    }
</style>

<div class="row">
<!-- Container untuk list barang -->
<div class="col-md-7 card-container">
    <div class="row mb-4">
        @foreach($barang as $bar)
        <div class="col-md-4">
            <div class="card mb-3" onclick="catatTransaksi('{{ $bar->id }}', '{{ $bar->nama_barang }}', '{{ $bar->harga_satuan }}')">
                <img src="{{ asset('storage/post-image/' . $bar->gambar_barang) }}" class="card-img-top card-img" alt="{{ $bar->nama_barang }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $bar->nama_barang }}</h5>
                    <p class="card-text">Harga: Rp {{ number_format($bar->harga_satuan, 0, ',', '.') }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Terakhir diperbarui: {{ $bar->updated_at->diffForHumans() }}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Container untuk pencatatan transaksi -->
<div class="col-5">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Catat Transaksi</h6>
        </div>
        <div class="card-body">
            <!-- Container untuk menampilkan semua barang yang dipilih -->
            <div id="list-barang-dipilih"></div>
            <!-- Tombol untuk menyimpan transaksi -->
            <button type="button" onclick="simpanTransaksi()" class="btn btn-primary">Simpan Transaksi</button>
        </div>
    </div>
</div>

</div>
</form>
@endsection

<!-- Script untuk menangani klik pada gambar -->
<script>
    // Inisialisasi array untuk menyimpan barang yang dipilih
    var barangDipilih = [];

    function catatTransaksi(barangId, namaBarang, hargaSatuan) {
        // Simpan data barang yang diklik dalam variabel atau objek JavaScript
        var dataBarang = {
            'id': barangId,
            'nama': namaBarang,
            'harga_satuan': hargaSatuan,
            'jumlah_beli': 1, // Jumlah beli awal default adalah 1
            'discount': 0 // Inisialisasi diskon awal sebagai 0
        };

        // Tambahkan data barang ke dalam array barangDipilih
        barangDipilih.push(dataBarang);

        // Panggil fungsi untuk menampilkan semua barang yang dipilih
        tampilkanBarangDipilih();
    }

    // Fungsi untuk menampilkan semua barang yang dipilih dalam pencatatan transaksi
    function tampilkanBarangDipilih() {
        // Kosongkan konten di dalam container pencatatan transaksi
        document.getElementById('list-barang-dipilih').innerHTML = '';

        // Loop melalui array barangDipilih dan tampilkan setiap barang dalam container
        barangDipilih.forEach(function(barang, index) {
            var container = document.createElement('div');
            container.innerHTML = `

<table class="table">
    <tbody>
        <tr>
            <th>Nama Barang</th>
            <td>${barang.nama}</td>
        </tr>
        <tr>
            <th>Harga Satuan</th>
            <td>Rp ${barang.harga_satuan}</td>
        </tr>
        <tr>
            <th>Jumlah Beli</th>
            <td>
                <input type="number" class="form-control" id="jumlah-beli-${index}" name="jumlah_beli" value="${barang.jumlah_beli}" onchange="hitungDiskon(${index})">
            </td>
        </tr>
        <tr>
            <th>Discount</th>
            <td>Rp <span id="discount-${index}">0</span></td>
        </tr>
        <tr>
            <th>Total Harga</th>
            <td id="total-harga-${index}">Rp 0</td>
        </tr>
    </tbody>
</table>
<hr>
            `;
            document.getElementById('list-barang-dipilih').appendChild(container);
        });
    }

  // Fungsi untuk menghitung diskon berdasarkan jumlah beli
function hitungDiskon(index) {
    var jumlahBeliInput = document.getElementById(`jumlah-beli-${index}`);
    var jumlahBeli = parseInt(jumlahBeliInput.value);
    var hargaSatuan = barangDipilih[index].harga_satuan;

    // Jika jumlah beli lebih besar dari 10, berikan diskon 5%
    var discount = (jumlahBeli > 10) ? hargaSatuan * 0.05 : 0;

    // Hitung total harga setelah diskon
    var totalHarga = (hargaSatuan * jumlahBeli) - discount;

    // Tampilkan diskon dan total harga di dalam span dengan id discount-{index} dan total-harga-{index}
    document.getElementById(`discount-${index}`).innerText = discount;
    document.getElementById(`total-harga-${index}`).innerText = 'Rp ' + totalHarga;
}

function simpanTransaksi() {
        // Kirim data transaksi ke server menggunakan AJAX
        $.ajax({
            url: '/simpan-transaksi', // Ganti dengan URL endpoint Anda
            method: 'POST',
            dataType: 'json',
            data: {
                transaksi: barangDipilih // Kirim data transaksi yang telah dipilih
            },
            success: function(response) {
                // Tampilkan pesan sukses atau lakukan tindakan lainnya
                alert('Transaksi berhasil disimpan!');
                // Setelah berhasil disimpan, kosongkan array barangDipilih
                barangDipilih = [];
                // Kemudian panggil fungsi untuk menampilkan kembali list barang yang dipilih
                tampilkanBarangDipilih();
            },
            error: function(xhr, status, error) {
                // Tampilkan pesan error jika terjadi kesalahan
                console.error('Terjadi kesalahan:', error);
                alert('Terjadi kesalahan saat menyimpan transaksi.');
            }
        });
    }
</script>