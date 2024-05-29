<?php

namespace App\Livewire\View\BarangList;

use App\Models\Peminjaman;
use Carbon\Carbon;
use Livewire\Component;

class Info extends Component
{
    public $id;

    public function render()
    {
        $data = Peminjaman::where('id_barang', $this->id)->first();
        $type = explode('_', $data->user->type)[0];
        $tglPinjam = Carbon::parse($data->tgl_peminjaman)->locale('id')->isoFormat("dddd, DD MMMM YYYY HH:mm");
        $tglPengembalian = Carbon::parse($data->tgl_pengembalian)->locale('id')->isoFormat("dddd, DD MMMM YYYY HH:mm");

        return view('livewire.view.barang-list.info', compact('data', 'type', 'tglPinjam', 'tglPengembalian'));
    }
}
