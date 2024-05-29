<?php

namespace App\Livewire\Dashboard\Master;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        
        $dataAdmin = User::where('role', 'admin')->get();

        return view('livewire.dashboard.master.index', compact( 'dataAdmin'));
    }

    

    public function view($id)
    {
        $this->dispatch('popupView', data: $id);
    }
}
