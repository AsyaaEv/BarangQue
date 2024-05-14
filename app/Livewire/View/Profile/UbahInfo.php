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
        $id = Auth::user()->id;
        $this->data = User::find($id);
        $this->nama = $this->data->name;
        $this->email = $this->data->email;
        $this->noWa = $this->data->no_wa;

        return view('livewire.view.profile.ubah-info');
    }

    public function ubahInfo()
    {
        $this->data->name = $this->nama;
        $this->data->email = $this->email;
        $this->data->no_wa = $this->noWa;

        try {
            $this->data->update();
            session()->flash('msg', __('Informasi Pengguna Berhasil Diubah'));

            return redirect('/profile');
        } catch (\Throwable $th) {

        }

    }
}
