<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        $data = Pengembalian::all();
        foreach ($data as $item) {
            $created = strtotime($item->tgl_delete) + (86400 * 7); // 2 minutes in seconds
            if ($created < time()) {
                $item->delete();
            }
        }
    }
}
