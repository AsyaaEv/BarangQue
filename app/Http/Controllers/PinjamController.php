<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;
use Carbon\Carbon;
use GuzzleHttp\Client;
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
        
        $tglSekarang = Carbon::now()->toDateString();

        $gambarPeminjaman = $request->file('file');
        if (!$gambarPeminjaman) {
            return redirect()->back()->withInput()->withErrors(['file' => 'Berkas tidak boleh kosong']);
        }
        
        $dataFoto = $gambarPeminjaman->store('peminjaman', 'public');
        $barang = Barang::where('no', $no_barang)->first();
        $jenis = $barang->jenis;
        $namaBarang = $barang->nama;
        $pemilik = $barang->owner->no_wa;


        
        $client = new Client();
        $url = 'https://waque.rifalkom.my.id/whatsapp/sendmessage'; 
        try {
            // Mengirim request ke API
            $response = $client->request('POST', $url, [
                'json' => [
                    "api_key" => "CqtVV1h/7zFAeN6tcaU+mXC2njZmCdMViWUUFOqLu4Y=", // your Secret key
                    "receiver" => $pemilik, // target
                    "type" => "PERSONAL", // PERSONAL | GROUP
                    "data" => [
                        "message" => "*BarangQue (Peminjaman)*\n\n*Informasi Peminjam :*\nNama : " . Auth::user()->name . "\nNo. Wa : " . Auth::user()->no_wa . "\n\n*Informasi Barang :* \nJenis : " . $jenis . "\nNama Barang : " . $namaBarang . " \nNo. Barang : " . $no_barang . "\nKeperluan : " . $keperluan . "\nTgl. Peminjaman : " . $tglSekarang . "\nTgl. Pengembalian : " . $tglPengembalian . "\n\n*Barang sedang dipinjam*, Silakan buka link berikut untuk melihat info lebih detail :" // message
                    ]
                ]
            ]);
            
        } catch (\Exception $e) {
            return;
        }
        
        $data = new Peminjaman;
        $data->id_barang = $no_barang;
        $data->keperluan = $keperluan;
        $data->tgl_peminjaman = $tglSekarang;
        $data->tgl_pengembalian = $tglPengembalian;
        $data->foto = $dataFoto;
        $data->peminjam = Auth::user()->name;
        
        if ($barang) {
            $barang->status = '1';
            try {
                $barang->save();
                $data->save();
                return redirect('/profile/barang')->with('success', 'Data peminjaman berhasil disimpan');
            } catch (\Throwable $th) {
                return redirect()->back()->withInput()->withErrors(['error' => 'Gagal menyimpan data peminjaman']);
            }
        } else {
            return redirect()->back()->withInput()->withErrors(['no_barang' => 'Barang tidak ditemukan']);
        }
    }
}
