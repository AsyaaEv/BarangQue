<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PinjamController extends Controller
{
    public function index($id)
    {
        $dataBarang = Barang::find($id);
        return view('view.barang.pinjam', compact('dataBarang'));
    }

    public function store(Request $request)
    {
        $no_barang = $request->input('no_barang');
        $keperluan = $request->input('keperluan');
        $tglPengembalian = $request->input('tglPengembalian');
        
        $validatedData = $request->validate([
            'keperluan' => 'required',
            'tglPengembalian' => 'required',
        ]);
        
        $tglSekarang = Carbon::now()->toDateString();

        
        $gambarPeminjaman = $request->file('file');
        if(!$gambarPeminjaman){
            session()->flash('error', 'Berkas tidak boleh kosong');
            return redirect()->back()->withInput();
        }
        if($tglPengembalian < $tglSekarang){
            session()->flash('error', 'Tanggal pengembalian harus diatas tanggal sekarang');
            return redirect()->back()->withInput();
        }
        
        if ($gambarPeminjaman) {
        } 
            $dataFoto = $gambarPeminjaman->store('peminjaman', 'public');
        
        $data = new Peminjaman;
        $data->id_barang = $no_barang;
        $data->keperluan = $keperluan;
        $data->tgl_peminjaman = $tglSekarang;
        $data->tgl_pengembalian = $tglPengembalian;
        $data->foto = $dataFoto;
        $data->peminjam = Auth::user()->name;
        
        $barang = Barang::where('no', $no_barang)->first();
        $barang->status = '1';
        
        
        try{
            $barang->update();
            $data->save();
            return redirect('/profile/barang');
        } catch (\Throwable $th){

        }
    }
}
