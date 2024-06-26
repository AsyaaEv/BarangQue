<?php

namespace App\Livewire\Dashboard\Navbar;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.dashboard.navbar.logout');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
