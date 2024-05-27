<?php

namespace App\Livewire\View\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UbahBio extends Component
{
    public $data;

    public $type;

    public $jurusanGuru;

    public $typeGuru;

    public $mapel;

    public $kode;

    public $kelas;

    public $absen;

    public $jurusan;

    public $posisi;

    public function render()
    {
        $this->data = User::find(Auth::user()->id);
        $this->type = strstr($this->data->type, '_', true);

        //Siswa
        $this->kelas = $this->data->typeuser->kelas;
        $this->absen = $this->data->typeuser->absen;
        $this->jurusan = $this->data->typeuser->jurusan;

        //guru
        $this->jurusanGuru = $this->data->typeuser->jurusan_guru;
        $this->typeGuru = $this->data->typeuser->type_guru;
        $this->mapel = $this->data->typeuser->mapel;
        $this->kode = $this->data->typeuser->kode;

        //staff
        $this->posisi = $this->data->typeuser->posisi;

        return view('livewire.view.profile.ubah-bio');
    }

    public function ubahBio()
    {
        $this->data->typeuser->kelas = $this->kelas;
        $this->data->typeuser->absen = $this->absen;
        $this->data->typeuser->jurusan = $this->jurusan;

        $this->data->typeuser->jurusan_guru = $this->jurusanGuru;
        $this->data->typeuser->type_guru = $this->typeGuru;
        $this->data->typeuser->mapel = $this->mapel;
        $this->data->typeuser->kode = $this->kode;

        $this->data->typeuser->posisi = $this->posisi;

        try {
            $this->data->typeuser->update();
            session()->flash('msgBio','Biodata Pengguna Berhasil Diubah');

            return redirect('/profile');
        } catch (\Throwable $th) {
        }
    }
}
