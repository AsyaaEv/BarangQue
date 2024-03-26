<?php

namespace App\Livewire\View;

use App\Models\Barang;
use Livewire\Component;

class ListBarang extends Component
{
    public function render()
    {
        $data = Barang::where('jenis', 'Laptop')->orderBy('no')->paginate(2);
        return view('livewire.view.list-barang', compact('data'));
    }
}
