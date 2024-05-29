<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;

    public static function delete_audit()
    {
        $now = time();
        $data = Audit::all();
        foreach ($data as $item) {
            $created = strtotime($item->created_at) + (60 * 60 * 24 * 7); // Menambah 7 hari ke waktu pembuatan
            if ($created < $now) {
                $item->delete();
            }
        }
    }
}
