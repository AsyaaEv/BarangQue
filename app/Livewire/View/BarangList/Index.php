<?php

namespace App\Livewire\View\BarangList;

use App\Models\Barang;
use Livewire\Component;

class Index extends Component
{
    public $status;
    public function render()
    {
        $query = Barang::query();
        if ($this->status !== 'all' && $this->status !== null) {
            $query->where('status', $this->status);
        }
        $data = $query->get();

        return view('livewire.view.barang-list.index', compact('data'));
    }
}
