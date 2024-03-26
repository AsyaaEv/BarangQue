<?php

namespace App\Livewire\View\ListBarang;

use App\Models\Barang;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{   
    public $status;
    public function render()
    {
        $data = Barang::where('status', $this->status)->get();
        echo $this->status;
        return view('livewire.view.list-barang.index', compact('data'));
    }

}
