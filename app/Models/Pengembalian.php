<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Pengembalian extends Model
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

    public static function delete_pengembalian()
    {
        $now = time();
        $data = Pengembalian::all();
        foreach ($data as $item) {
            $created = strtotime($item->created_at) + (60 * 60 * 24 * 7); // Menambah 7 hari ke waktu pembuatan
            if ($created < $now) {
                if ($item->foto_pengembalian) {
                    Storage::delete('public/' . $item->foto_pengembalian);
                }
                $item->delete();
            }
        }
    }
}
