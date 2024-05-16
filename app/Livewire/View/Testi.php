<?php

namespace App\Livewire\View;

use App\Models\Testimoni;
use Livewire\Component;

class Testi extends Component
{
    public function render()
    {
        $averageRating = number_format(Testimoni::average('rating'), 1);
        $data = Testimoni::where('rating', '5')->paginate(3);
        return view('livewire.view.testi', compact('data', 'averageRating'));
    }
}
