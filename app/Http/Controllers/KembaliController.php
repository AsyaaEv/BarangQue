<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KembaliController extends Controller
{
    public function index($id)
    {
        $data = Peminjaman::where('id', $id)->orWhere('id_barang', $id)->first();
        $type = strstr($data->user->type, '_', true);
        $tglPinjam = Carbon::parse($data->tgl_peminjaman)->locale('id')->isoFormat('dddd, D MMMM Y HH:mm');
        $tglPengembalian = Carbon::parse($data->tgl_pengembalian)->locale('id')->isoFormat('dddd, D MMMM Y HH:mm');

        return view('view.profile.kembali_barang', compact('data', 'type', 'tglPinjam', 'tglPengembalian'));
    }

    public function store(Request $request)
    {
        $no_barang = $request->input('no_barang');
        $gambarPeminjaman = $request->file('file');
        $data = Peminjaman::where('id_barang', $no_barang)->first();

        $pengembalian = new Pengembalian;
        $dataFoto = $gambarPeminjaman->store('pengembalian', 'public');
        $pengembalian->foto_pengembalian = $dataFoto;
        $pengembalian->id_barang = $no_barang;
        $pengembalian->keperluan = $data->keperluan;
        $pengembalian->tgl_pengembalian = $data->tgl_pengembalian;
        $pengembalian->tgl_peminjaman = $data->tgl_peminjaman;
        $pengembalian->peminjam = Auth::user()->name;
        $pengembalian->tgl_delete = date('Y-m-d H:i:s');

        $barang = Barang::where('no', $no_barang)->first();
        $pemilik = $barang->owner->no_wa;
        $jenis = $barang->jenis;
        $namaBarang = $barang->nama;
        $barang->peminjam = null;
        $barang->status = 0;

        if ($data->foto) { 
            Storage::delete('public/' . $data->foto);
        }
        $tglPeminjaman = Carbon::parse($data->tgl_peminjaman)->locale('id')->isoFormat('DD MMMM YYYY HH:mm');
        $tglPengembalian = Carbon::parse($data->tgl_pengembalian)->locale('id')->isoFormat('DD MMMM YYYY HH:mm');
        $waktuSekarang = Carbon::now()->locale('id')->isoFormat('DD MMMM YYYY HH:mm');
        $keperluan = $data->keperluan;

        $client = new Client();
        $url = 'https://waque.rifalkom.my.id/whatsapp/sendmessage';
        try {
            // Mengirim request ke API
            $response = $client->request('POST', $url, [
                'json' => [
                    'api_key' => 'CqtVV1h/7zFAeN6tcaU+mXC2njZmCdMViWUUFOqLu4Y=', // your Secret key
                    'receiver' => $pemilik, // target
                    'type' => 'PERSONAL', // PERSONAL | GROUP
                    'data' => [
                        'message' => "*BarangQue (Pengembalian)*\n\n*Informasi Peminjam :*\nNama : " . Auth::user()->name . "\nNo. Wa : " . Auth::user()->no_wa . "\n\n*Informasi Barang :* \nJenis : " . $jenis . "\nNama Barang : " . $namaBarang . " \nNo. Barang : " . $no_barang . "\n\n*Informasi Peminjaman*" . "\nKeperluan : " . $keperluan . "\nTgl. Peminjaman : " . $tglPeminjaman . "\nTgl. Pengembalian : " . $tglPengembalian . "\n\n_Peminjam telah mengembalikan barang ini pada " . $waktuSekarang . "_" . "\n\n*Barang telah di kembalikan ketempat penyimpanan dengan aman*, Silakan buka link berikut untuk melihat info lebih detail :",
                    ],
                ],
            ]);
        } catch (\Exception $e) {
            return;
        }

        try {
            $barang->update();
            $data->delete();
            $pengembalian->save();
            session()->flash('success', "Anda berhasil mengkembalikan barang pinjaman");
            session()->flash('testimoni', "matap");
        } catch (\Exception $e) {
        }
    }
}
