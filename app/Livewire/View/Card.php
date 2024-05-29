<?php

namespace App\Livewire\View;

use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Card extends Component
{
    public function render()
    {
        $data = Peminjaman::where('peminjam', Auth::user()->name)->count();
        return view('livewire.view.card', compact('data'));
    }
}
