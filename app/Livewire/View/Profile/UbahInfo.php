<?php

namespace App\Livewire\View\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UbahInfo extends Component
{
    public $data;

    public $nama;

    public $email;

    public $noWa;

    public function render()
    {
        $this->data = User::find(Auth::user()->id);
        $this->nama = $this->data->name;
        $this->email = $this->data->email;
        $this->noWa = $this->data->no_wa;

        return view('livewire.view.profile.ubah-info');
    }

    public function ubahInfo()
    {
        $this->data->name = $this->nama;
        $this->data->email = $this->email;
        
        try {
            $this->data->update();
            session()->flash('msgInfo','Informasi Pengguna Berhasil Diubah');
            
            return redirect('/profile');
        } catch (\Throwable $th) {
            dd($th);
        }

    }
}
