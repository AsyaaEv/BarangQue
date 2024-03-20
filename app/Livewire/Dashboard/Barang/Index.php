<?php

namespace App\Livewire\Dashboard\Barang;

use App\Models\Barang;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $jenis, $id, $no, $foto, $keyword = '';
    public function render()
    {
        $data = Barang::where('no', 'like', '%' .$this->keyword. '%')->orderBy('id', 'desc')->get();

        return view('livewire.dashboard.barang.index', compact('data'));
    }

    public function updatedKeyword(){
        $this->resetPage();
    }

    public function delete($id){
        $this->dispatch('delete', id:$id);
    }
    
}
