@extends('layout.main')
@section('title', 'Data Barang')
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
        <h6 class="m-0 font-weight-bold text-primary">List Barang</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('barang.tambah') }}" class="btn btn-primary mb-3">Tambah Barang</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Stock</th>
                        <th>Harga</th>
                        <th><Center>Total Terjual</Center></th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            
                <tbody>
                    @php
                    use Illuminate\Support\Facades\DB;   
                    $data = App\Models\Barang::all();
                    $no=1;
                    @endphp
                    
                    @foreach ($data as $row)
                    @php
                    $totalTerjual = DB::table('transaksi')
                                    ->where('kode_barang', $row->id)
                                    ->sum('jumlah_beli');
                    @endphp
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->kode_barang }}</td>
                        <td>{{ $row->nama_barang }}</td>
                        <td>{{ $row->satuan }}</td>
                        <td>{{ $row->jumlah_stock }}</td>
                        <td>Rp {{ number_format($row->harga_satuan, 0, ',', '.') }}</td>
                        <td><center>
                            {{-- Query untuk menghitung total terjual untuk setiap barang --}}
                            {{ $totalTerjual }}
                        </center></td>
                        <td>
                            <a href="{{ route('barang.update',$row->id) }}" class="btn btn-warning">Update</a>
                            <a href="{{ route('barang.delete',$row->id) }}" class="btn btn-danger">Delete</a>
                            
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
