<?php

namespace App\Livewire\View\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class RemovePp extends Component
{

    
    public function render()
    {
        return view('livewire.view.profile.remove-pp');
    }

    public function removePP(){
        $data = User::find(Auth::user()->id);

        if(Storage::exists('public/'. $data->foto)){
            Storage::delete('public/' .$data->foto);
        }
        $data->foto = 'foto/blank_pp.png';
        $data->update();
        return redirect('/profile');
    }
}
