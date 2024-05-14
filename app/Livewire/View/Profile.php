<?php

namespace App\Livewire\View;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        $auth = Auth::user()->id;
        $data = User::find($auth);
        $type = strstr($data->type, '_', true);

        return view('livewire.view.profile', compact('data', 'type'));
    }
}
