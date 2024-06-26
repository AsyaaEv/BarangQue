<?php

namespace App\Livewire\Dashboard\Barang;

use App\Models\Barang;
use App\Models\Pengembalian;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $jenis;

    public $id;

    public $no;

    public $foto;

    public $keyword = '';

    public function render()
    {
        $data = Barang::where('no', 'like', '%'.$this->keyword.'%')->orderBy('no')->get();
        $pengembalian = Pengembalian::orderBy('id', 'desc')->get();

        return view('livewire.dashboard.barang.index', compact('data', 'pengembalian'));
    }

    public function updatedKeyword()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        $this->dispatch('delete', id: $id);
    }

    public function edit($id)
    {
        $this->dispatch('edit', id: $id);
    }
}
