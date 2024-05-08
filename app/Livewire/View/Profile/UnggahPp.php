<?php

namespace App\Livewire\View\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UnggahPp extends Component
{
    use WithFileUploads;
    public $fotoNew, $errorM;
    public function render()
    {
        return view('livewire.view.profile.unggah-pp');
    }

    public function unggahPP(){
        $this->validate([
            'fotoNew' => 'image|mimes:jpg,png|max:1024' // Adjusted validation rule for file types and size
        ], [
            'fotoNew.image' => 'File yang diunggah harus berupa gambar.',
            'fotoNew.mimes' => 'Gambar harus berformat: jpg, png.',
            'fotoNew.max' => 'Ukuran gambar tidak boleh lebih dari 1MB.'
        ]);

        if($this->fotoNew){
            $data = User::find(Auth::user()->id);
            if($data->foto !== 'foto/blank_pp.png') {
                Storage::delete('public/' . $data->foto);
            }
            $foto = $this->fotoNew->store('foto', 'public');
            $data->foto = $foto;
            $data->update();
            return redirect('/profile');
        }
    }
}
