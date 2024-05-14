<?php

namespace App\Livewire\View;

use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Barang extends Component
{
    public $id;

    public function render()
    {
        $originalLocale = Carbon::getLocale();
        Carbon::setLocale('id');

        $data = Peminjaman::where('peminjam', Auth::user()->name)->orderBy('id', 'desc')->get();

        $view = view('livewire.view.barang', compact('data'));

        Carbon::setLocale($originalLocale); // Reset locale back

        return $view;
    }
}
