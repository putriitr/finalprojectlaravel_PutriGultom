@extends('layout.main')


@section('content')
<div class="row">
    
    <div class="col-md-6 offset-md-3">
        <div class="card">
            
            <div class="card-body">
                <form action="{{ route('laporan.print') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="tanggal">Filter Tanggal Laporan Transaksi:</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Filter</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
