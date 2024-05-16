<?php

namespace App\Livewire\View;

use App\Models\Testimoni;
use Livewire\Component;

class Testimonis extends Component
{
    public $rating;
    public function render()
    {
        $data = Testimoni::where('rating', empty($this->rating) ? '5' : $this->rating)->get();
        $b5 = Testimoni::where('rating', '5')->count();
        $b4 = Testimoni::where('rating', '4')->count();
        $b3 = Testimoni::where('rating', '3')->count();
        $b2 = Testimoni::where('rating', '2')->count();
        $b1 = Testimoni::where('rating', '1')->count();
        return view('livewire.view.testimonis', compact('data', 'b5', 'b4', 'b3', 'b2', 'b1'));
    }
}
