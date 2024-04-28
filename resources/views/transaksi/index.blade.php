<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 10px;
    }
   
</style>
@extends('layout.main')

@section('title', 'Data Transaksi')
@section('content')
<div class="container-fluid">
    <!-- Tampilkan pesan flash di sini -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Transaksi</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('transaksi.tambah') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>    
                        <th>Nama Barang</th>
                        <th>Jumlah Beli</th>
                        <th>Total Harga</th>
                        <th>Discount</th>
                        <th>Total Penjualan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            
                <tbody>
                        @php($no=1)
                        @foreach ($data as $row)  
                        <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->tanggal }}</td>
                        
                        <td>{{ $row->barang->nama_barang }}</td>
                        <td>{{ $row->jumlah_beli }}</td>
                        <td>Rp {{ number_format($row->total_harga, 0, ',', '.') }}</td>
                        <td>{{ $row->discount }}</td>
                        <td>Rp {{ number_format($row->total_penjualan, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('transaksi.update',$row->id)  }}" class="btn btn-warning">Update</a>
                            <a href="{{ route('transaksi.delete',$row->id)  }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                        @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection