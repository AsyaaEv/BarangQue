<?php

namespace App\Livewire\View;

use App\Models\Testimoni;
use Livewire\Component;

class Testi extends Component
{
    public function render()
    {
        $data = Testimoni::all();
        return view('livewire.view.testi', compact('data'));
    }
}
