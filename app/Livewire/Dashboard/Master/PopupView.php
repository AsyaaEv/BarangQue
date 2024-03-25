<?php

namespace App\Livewire\Dashboard\Master;

use App\Models\Audit;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class PopupView extends Component
{
    public function render()
    {
        return view('livewire.dashboard.master.popup-view');
    }

    public $id, $nama, $foto, $email, $typeUser, $kelas, $absen, $jurusan, $jurusanGuru, $typeGuru, $mapel, $kodeGuru, $posisi, $noWa;
    #[On('popupView')]
    public function  updateView($data){
        $data = User::find($data);
        $this->id = $data->id;
        $this->nama = $data->name;
        $this->foto = $data->foto;
        $this->email = $data->email;
        $this->noWa = $data->no_wa;
        $type = strstr($data->type, '_', true);
        $this->typeUser = $type;
        $this->kelas = $data->typeuser->kelas;
        $this->absen = $data->typeuser->absen;
        $this->jurusan = $data->typeuser->jurusan;
        $this->jurusanGuru = $data->typeuser->jurusan_guru;
        $this->typeGuru = $data->typeuser->type_guru;
        $this->mapel = $data->typeuser->mapel;
        $this->kodeGuru = $data->typeuser->kode;
        $this->posisi = $data->typeuser->posisi;
    }

    public function deleteRole($id){
        $data = User::find($id);
        $data->removeRole('admin');
        $data->assignRole('user');
        $data->role = 'user';
        $data->update();

        $audit = new Audit;
        $audit->nama_admin = Auth::user()->name;
        $audit->keterangan = 'Menghapus';
        $audit->admin = $data->name;
        $audit->type = 'admin';
        $audit->save();
        return redirect('/dashboard/master');

    }

    protected $redirectToSelf = true;

    public function close(){
        $this->redirect('/dashboard/master');
    }
    
}
