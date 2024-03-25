<?php

namespace App\Livewire\Dashboard\Master;

use App\Models\Audit;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PopupAdd extends Component
{
    public function render()
    {
        $data = User::where('role', 'user')->get();
        return view('livewire.dashboard.master.popup-add', compact('data'));
    }

    public function add($id){
        $data = User::find($id);
        $data->assignRole('admin');
        $data->role = 'admin';
        $data->update();

        $audit = new Audit;
        $audit->nama_admin = Auth::user()->name;
        $audit->keterangan = 'Menambahkan';
        $audit->admin = $data->name;
        $audit->type = 'admin';
        $audit->save();
        return redirect('/dashboard/master');
    }
}
