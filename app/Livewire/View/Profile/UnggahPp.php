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
            'fotoNew' => 'image|max:1024' // Adjusted validation rule
        ]);


        if($this->fotoNew){
            $data = User::find(Auth::user()->id);
            Storage::delete('public/' . $data->foto);
            $foto = $this->fotoNew->store('foto', 'public');
            $data->foto = $foto;
            $data->update();
            return redirect('/profile');
        }
    }
}
