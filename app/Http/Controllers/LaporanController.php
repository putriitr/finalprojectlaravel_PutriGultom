<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $transaksi=Transaksi::get();
        return view('laporan.index',['data'=>$transaksi]);

    }
    public function laporanPrint(Request $request)
    {
        $tanggal = $request->tanggal;
        $transaksis = Transaksi::whereDate('tanggal', $tanggal)->get();
        return view('laporan.print', compact('transaksis', 'tanggal'));
    }
}
