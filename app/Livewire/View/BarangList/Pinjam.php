<?php

namespace App\Livewire\View\BarangList;

use App\Models\Barang;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class Pinjam extends Component
{
    use WithFileUploads;
    public $id, $keperluan, $tglPeminjaman, $tglPengembalian, $gambar;
    public function render()
    {
        $dataBarang = Barang::find($this->id);
        $this->tglPeminjaman = Carbon::now()->toDateString();
        return view('livewire.view.barang-list.pinjam', compact('dataBarang'));
    }

    public function insertPinjam($data){
        dd($this->gambar);
    }
}
