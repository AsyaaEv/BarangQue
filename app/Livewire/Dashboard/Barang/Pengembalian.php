<?php

namespace App\Livewire\Dashboard\Barang;

use App\Models\Pengembalian as BarangPengembalian;
use Carbon\Carbon;
use Livewire\Component;

class Pengembalian extends Component
{
    public $id;

    public function render()
    {
        $data = BarangPengembalian::where('id', $this->id)->first();
        $type = explode('_', $data->user->type)[0];
        $tglPinjam = Carbon::parse($data->tgl_peminjaman)->locale('id')->isoFormat("dddd, DD MMMM YYYY HH:mm");
        $tglPengembalian = Carbon::parse($data->tgl_pengembalian)->locale('id')->isoFormat("dddd, DD MMMM YYYY HH:mm");

        return view('livewire.dashboard.barang.pengembalian', compact('data', 'tglPinjam', 'tglPengembalian', 'type'));
    }
}
