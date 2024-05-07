<?php

namespace App\Livewire\View\BarangList;

use App\Models\Peminjaman;
use Livewire\Component;

class Info extends Component
{
    public $id;
    public function render()
    {
        $data = Peminjaman::where('id_barang', $this->id)->first();
        $type = explode('_', $data->user->type)[0];
        $tglPinjam = date('l, j F Y', strtotime($data->tgl_peminjaman));
        $tglPengembalian = date('l, j F Y', strtotime($data->tgl_pengembalian)); 
        return view('livewire.view.barang-list.info', compact('data', 'type', 'tglPinjam', 'tglPengembalian'));
    }
}
