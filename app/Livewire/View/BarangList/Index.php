<?php

namespace App\Livewire\View\BarangList;

use App\Models\Barang;
use Livewire\Component;

class Index extends Component
{
    public $status, $jenis;

    public function render()
    {
        $query = Barang::query();
        if ($this->status !== 'all' && $this->status !== null) {
            $query->where('status', $this->status);
        }
        if ($this->jenis !== 'all' && $this->jenis !== null) {
            $query->where('jenis', $this->jenis);
        }
        $data = $query->get();
        $filter = Barang::all();

        return view('livewire.view.barang-list.index', compact('data', 'filter'));
    }
}
