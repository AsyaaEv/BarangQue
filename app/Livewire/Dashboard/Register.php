<?php

namespace App\Livewire\Dashboard;

use App\Models\TypeUser;
use App\Models\User;
use Egulias\EmailValidator\Validation\EmailValidation;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Register extends Component
{
    use WithFileUploads;
    public $nama, $toggle1 = false, $toggle2 = false, $type, $noWa, $foto, $password, $cPassword, $email, $errorM;

    //siswa
    public $kelas, $absen, $jurusan;

    //guru
    public $jurusanGuru, $typeGuru, $mapel, $kodeGuru;

    //staf
    public $posisi;
    public function render()
    {
        return view('livewire.dashboard.register');
    }

    public function insert()
    {

        $this->validate([
            'foto' => 'file|max:1020|mimes:png,jpg,jpeg,PNG,JPG|nullable'
        ], [
            'foto.file' => $this->errorM = 'Upload harus type file',
            'foto.max' => $this->errorM = 'maksimal size 1mb',
            'foto.mimes' => $this->errorM = 'type file hanya png dan jpg',
        ]);


        $jurusan = str::upper($this->jurusan);
        $kelas = Str::upper($this->kelas);
        $jurusanGuru = Str::upper($this->jurusanGuru);
        $kodeGuru = Str::upper($this->kodeGuru);

        $data = new User;
        $data->name = $this->nama;
        $data->email = $this->email;
        $data->password = $this->password;
        $data->role = 'user';
        $data->assignRole('user');
        $data->no_wa = $this->noWa;
        $data->type = $this->type . '_' . $this->nama;

        $type = new TypeUser;
        $type->type = $this->type . '_' . $this->nama;
        $type->kelas = $kelas;
        $type->absen = $this->absen;
        $type->jurusan = $jurusan;
        $type->jurusan_guru = $jurusanGuru;
        $type->type_guru = $this->typeGuru;
        $type->mapel = $this->mapel;
        $type->kode = $kodeGuru;
        $type->posisi = $this->posisi;


        if ($this->foto) {
            $foto = $this->foto->store('foto', 'public');
            $data->foto = $foto;
        } else {
            $data->foto = 'foto/blank_pp.jpg';
        }

        try {
            $type->save();
            $data->save();
            session()->flash('msg', 'Registrasi berhasil dilakukan');
            return redirect('/');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function section1()
    {
        if(!$this->nama || !$this->email || !$this->password || !$this->cPassword){
            $this->errorM = 'semua input harus terisi';
            return;
        } 

        if($this->cPassword != $this->password){
            $this->errorM = 'ketidak cocokan confirm password';
            return;
        }

        $name = User::where('name', $this->nama)->get();
        if($name->count() > 0){
            $this->errorM = 'username sudah digunakan';
            return;
        }

        $email = User::where('email', $this->email)->get();
        if($email->count() > 0){
            $this->errorM = 'email sudah digunakan';
            return;
        }

        $this->toggle1 = true;


    }

    public function section2()
    {
        if($this->type == 0){
            $this->errorM = 'silakan pilih type user';
            return;
        }

        if($this->type == 'Siswa'){
            if(!$this->kelas || !$this->absen || !$this->jurusan){
                $this->errorM = 'Semua input harus terisi';
                return;
            }
        }

        if($this->type == 'Guru'){
            if(!$this->jurusanGuru || !$this->typeGuru || !$this->mapel || !$this->kodeGuru){
                $this->errorM = 'Semua input harus terisi';
                return;
            }
        }
        if($this->type == 'Staf'){
            if(!$this->posisi){
                $this->errorM = 'Semua input harus terisi';
                return;
            }
        }

        if(!$this->noWa){
            $this->errorM = 'Semua input harus terisi';
                return;
        }
        $this->toggle1 = false;
        $this->toggle2 = true;
    }

    public function back1()
    {
        $this->toggle1 = false;
        $this->toggle2 = false;
        return redirect('/login');
    }

    public function back2()
    {
        $this->toggle1 = false;
    }
    public function back3()
    {
        $this->toggle2 = false;
        $this->toggle1 = true;
    }

    public function selectUserType()
    {
        if ($this->type == 'Siswa') {
            $this->jurusanGuru = null;
            $this->typeGuru = null;
            $this->mapel = null;
            $this->kodeGuru = null;
            $this->posisi = null;
        } elseif ($this->type == 'Guru') {
            $this->kelas = null;
            $this->absen = null;
            $this->jurusan = null;
            $this->posisi = null;
        } else {
            $this->kelas = null;
            $this->absen = null;
            $this->jurusan = null;
            $this->jurusanGuru = null;
            $this->typeGuru = null;
            $this->mapel = null;
            $this->kodeGuru = null;
        }
    }

    public function alertClose(){
        $this->errorM = null;
    }
}
