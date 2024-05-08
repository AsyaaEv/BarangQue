<?php

namespace App\Livewire\Dashboard\Barang;

use Livewire\Component;
use App\Models\Pengembalian as BarangPengembalian;

class Pengembalian extends Component
{
    public $id;
    public function render()
    {
        $data = BarangPengembalian::where('id_barang', $this->id)->first();
        $type = explode('_', $data->user->type)[0];
        $tglPinjam = date('l, j F Y', strtotime($data->tgl_peminjaman));
        $tglPengembalian = date('l, j F Y', strtotime($data->tgl_pengembalian));
        return view('livewire.dashboard.barang.pengembalian', compact('data', 'tglPinjam', 'tglPengembalian', 'type'));
    }
}
