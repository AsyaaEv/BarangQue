<?php

namespace App\Livewire\View;

use App\Models\Peminjaman;
use App\Models\Testimoni;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Barang extends Component
{
    public $id;
    public $rating, $alasan, $error, $toggleTesti = true;

    public function render()
    {
        $originalLocale = Carbon::getLocale();
        Carbon::setLocale('id');

        $data = Peminjaman::where('peminjam', Auth::user()->name)->orderBy('id', 'desc')->get();

        $view = view('livewire.view.barang', compact('data'));

        Carbon::setLocale($originalLocale); // Reset locale back

        return $view;
    }

    public function testi()
    {
        if ( empty($this->rating) ||empty($this->alasan)) {
            $this->error = "Masukan rating dan alasan terlebih dahulu";
            return;
        }

        $data = new Testimoni();
        $data->nama = Auth::user()->name;
        $data->rating = $this->rating;
        $data->alasan = $this->alasan;
        $data->save();
        $this->toggleTesti = false;
        session()->flash('success', "Anda berhasil memberikan ulasan");
        return redirect('/profile/barang');
    }

    public function hide(){
        $this->toggleTesti = false;
    }
}

