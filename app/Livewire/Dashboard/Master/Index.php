<?php

namespace App\Livewire\Dashboard\Master;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $allUser = $this->getAllUser();
        $getAdmin = $this->getAdmin();
        $getUser = $this->getUser();
        $dataAdmin = User::where('role', 'admin')->get();
        return view('livewire.dashboard.master.index', compact('allUser', 'getAdmin' , 'getUser', 'dataAdmin'));
    }

    public function getAllUser(){
        return User::count();
    }
    public function getAdmin(){
        return User::where('role', 'admin')->count();
    }
    public function getUser(){
        return User::where('role', 'user')->count();
    }

    public function view($id){
        $this->dispatch('popupView', data:$id);
    }
}
