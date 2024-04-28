<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            
        }
        h3 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laporan Transaksi </h1>
        <h3> Tanggal {{ $tanggal }}</h3>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Transaksi</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Jumlah Beli</th>
                    <th>Total Harga</th>
                    <th>Diskon</th>
                    <th>Total penjualan</th>
                    <!-- Sesuaikan dengan kolom-kolom yang ingin ditampilkan -->
                </tr>
            </thead>
            <tbody>
                @php
                    $totalPenjualan = 0;
                    $jumlah_beli=0;
                    $total_harga=0;
                    $discount=0;
                @endphp
                @foreach($transaksis as $key => $transaksi)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $transaksi->kode_transaksi }}</td>
                    <td>{{ $transaksi->barang->nama_barang }}</td>
                    <td>{{ $transaksi->barang->satuan }}</td>
                    <td><center>{{ $transaksi->jumlah_beli }}</center></td>
                    <td>Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($transaksi->discount, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($transaksi->total_penjualan, 0, ',', '.') }}</td>
                    <!-- Sesuaikan dengan data-data transaksi yang ingin ditampilkan -->
                </tr>
                @php
                    $totalPenjualan += $transaksi->total_penjualan;
                    $jumlah_beli +=$transaksi->jumlah_beli;
                    $total_harga +=$transaksi->total_harga;
                    $discount +=$transaksi->discount;
                @endphp
                @endforeach
                <tr>
                    
                    <td colspan="4" class="text-right"><strong>Total Penjualan Keseluruhan</strong></td>
                    <td style="text-align: center;"> {{ $jumlah_beli }}</td>
                    <td style="text-align: center;">Rp {{ number_format($total_harga, 0, ',', '.') }}</td>
                    <td style="text-align: center;">Rp {{ number_format($discount, 0, ',', '.') }}</td>
                    <td style="text-align: center;font-weight:bold">Rp {{ number_format($totalPenjualan, 0, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>
