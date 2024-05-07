<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    public function barang(){
        return $this->belongsTo(Barang::class, 'id_barang', 'no');
    }
    public function user(){
        return $this->belongsTo(User::class, 'peminjam', 'name');
    }
}
 