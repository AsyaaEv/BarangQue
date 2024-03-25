<?php

namespace App\Livewire\View;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public function render()
    {

        return view('livewire.view.profile');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
