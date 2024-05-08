<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Peminjaman extends Model
{
    use HasFactory;

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'no');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'peminjam', 'name');
    }

    public static function infoTanggalPeminjaman()
    {
        $data = Peminjaman::whereDate('tgl_pengembalian', '<', now()->addDay())->get();

        if ($data->isNotEmpty()) {
            $client = new Client();
            $url = 'https://waque.rifalkom.my.id/whatsapp/sendmessage';
            try {
                // Mengirim request ke API
                $response = $client->request('POST', $url, [
                    'json' => [
                        "api_key" => "CqtVV1h/7zFAeN6tcaU+mXC2njZmCdMViWUUFOqLu4Y=", // your Secret key
                        "receiver" => $data->user->no_wa, // target
                        "type" => "PERSONAL", // PERSONAL | GROUP
                        "data" => [
                            "message" => "*BarangQue (Peminjaman)*\n\n*Informasi Peminjam :*\nNama : " . $data->user->name . "\nNo. Wa : " . $data->user->no_wa . "\n\n*Informasi Barang :* \nJenis : " . $data->barang->jenis . "\nNama Barang : " . $data->barang->nama . " \nNo. Barang : " . $data->barang->no . "\nKeperluan : " . $data->keperluan . "\nTgl. Peminjaman : " . $data->tgl_peminjaman . "\nTgl. Pengembalian : " . $data->tgl_pengembalian . "\n\nWaktu peminjaman barang anda tinggal 1 hari lagi, segera selesaikan urusan anda dan jangan lupa untuk mengembalikan barang pinjaman tepat waktu." // message
                        ]
                    ]
                ]);
            } catch (\Exception $e) {
                // Handle error
                // Misalnya: Log error atau kirim notifikasi ke admin
            }
        }
    }
    public static function infoDeadlinePeminjaman()
    {
        $data = Peminjaman::whereDate('tgl_pengembalian', '=', now()->toDateString())->with('user', 'barang')->first();
        $client = new Client();
        $url = 'https://waque.rifalkom.my.id/whatsapp/sendmessage';
        try {
            $response = $client->request('POST', $url, [
                'json' => [
                    "api_key" => "CqtVV1h/7zFAeN6tcaU+mXC2njZmCdMViWUUFOqLu4Y=", 
                    "receiver" => $data->user->no_wa,
                    "type" => "PERSONAL",
                    "data" => [
                        "message" => "*BarangQue (Peminjaman)*\n\n*Informasi Peminjam :*\nNama : " . $data->user->name . "\nNo. Wa : " . $data->user->no_wa . "\n\n*Informasi Barang :* \nJenis : " . $data->barang->jenis . "\nNama Barang : " . $data->barang->nama . " \nNo. Barang : " . $data->barang->no . "\nKeperluan : " . $data->keperluan . "\nTgl. Peminjaman : " . $data->tgl_peminjaman . "\nTgl. Pengembalian : " . $data->tgl_pengembalian . "\n\nWaktu peminjaman barang anda sudah habis, segera kembalikan barang pinjaman anda dan jangan lupa untuk foto pengembalian barang sebagai barang bukti. " // message
                    ]
                ]
            ]);
        } catch (\Exception $e) {
        }
    }
}
