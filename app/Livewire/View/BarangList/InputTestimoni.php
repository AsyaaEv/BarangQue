<?php

namespace App\Livewire\View\BarangList;

use App\Models\Testimoni;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InputTestimoni extends Component
{
    public $toggleTesti, $rating, $alasan, $error;
    public function render()
    {
        return view('livewire.view.barang-list.input-testimoni');
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
        return redirect('/profile/barang');
    }
}
