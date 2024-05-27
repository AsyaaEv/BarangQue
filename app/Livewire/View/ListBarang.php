<?php

namespace App\Livewire\View;

use App\Models\Barang;
use Livewire\Component;

class ListBarang extends Component
{
    public function render()
    {
        $data = Barang::where('status', '0')->orderBy('no')->paginate(3);

        return view('livewire.view.list-barang', compact('data'));
    }
}
