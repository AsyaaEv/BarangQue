<?php

namespace App\Livewire\View;

use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Barang extends Component
{

    public $id;
    public function render()
    {
        $data = Peminjaman::where('peminjam', Auth::user()->name)->get();
        return view('livewire.view.barang', compact('data'));
    }
}
