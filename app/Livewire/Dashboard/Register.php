<?php

namespace App\Livewire\Dashboard;

use App\Models\TypeUser;
use App\Models\User;
use Egulias\EmailValidator\Validation\EmailValidation;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use GuzzleHttp\Client;

class Register extends Component
{
    use WithFileUploads;
    public $nama, $toggle1 = false, $toggle2 = false, $toggle3 = false, $toggle4 = false, $type, $noWa, $foto, $password, $cPassword, $email, $errorM, $otp;
    public $otp1, $otp2, $otp3, $otp4, $otp5, $otp6;

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

        $combinedOtp = $this->otp1 . $this->otp2 . $this->otp3 . $this->otp4 . $this->otp5 . $this->otp6;
        if ($combinedOtp != $this->otp) {
            $this->errorM = 'OTP tidak cocok.';
            return;
        } 
       
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
            $data->foto = 'foto/blank_pp.png';
        }

        try {
            $type->save();
            $data->save();
            return redirect('/login');
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
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errorM = 'format email tidak valid';
            return;
        }
        
        if(strlen($this->password) < 6){
            $this->errorM = 'password minimal 6 karakter';
            return;
        }
        
        if($this->cPassword != $this->password){
            $this->errorM = 'konfirmasi password tidak sama dengan password';
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
        $this->toggle1 = false;
        $this->toggle2 = true;
    }

    public function section3(){
        if ($this->foto) {
            $fileExtension = strtolower($this->foto->getClientOriginalExtension());
            if (!in_array($fileExtension, ['png', 'jpg', 'jpeg'])) {
                $this->errorM = 'Format foto harus PNG atau JPG';
                return;
            }
            if ($this->foto->getSize() > 1024 * 1024) { // 1MB in bytes
                $this->errorM = 'Ukuran foto maksimal 1MB';
                return;
            }
        }

        
        $this->toggle2 = false;
        $this->toggle3 = true;
    }

    public function section4()
    {
        if (substr($this->noWa, 0, 2) !== '08') {
            $this->errorM = 'Nomor telepon harus diawali dengan 08';
            return;
        }
        $this->otp = rand(100000, 999999);
    
        $client = new Client();
        $url = 'https://waque.rifalkom.my.id/whatsapp/sendmessage'; 
        try {
            // Mengirim request ke API
            $response = $client->request('POST', $url, [
                'json' => [
                    "api_key" => "CqtVV1h/7zFAeN6tcaU+mXC2njZmCdMViWUUFOqLu4Y=", // your Secret key
                    "receiver" => $this->noWa, // target
                    "type" => "PERSONAL", // PERSONAL | GROUP
                    "data" => [
                        "message" => "*BarangQue*\n\nKode OTP Anda : *" . strval($this->otp) . "*, Jangan berikan kode otp anda kepada siapapun!\n\nGunakan kode otp ini untuk mendaftar akun anda dan kode otp ini hanya berlaku 1 menit." // message
                    ]
                ]
            ]);
            
        } catch (\Exception $e) {
            $this->errorM = 'Error: ' . $e->getMessage();
        }
        
        $this->toggle3 = false;
        $this->toggle4 = true;
    }

    public function back1()
    {
        $this->toggle1 = false;
        $this->toggle2 = false;
        $this->toggle3 = false;
        $this->toggle4 = false;
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

    public function back4()
    {
        $this->toggle3 = false;
        $this->toggle2 = true;
    }
    public function back5()
    {
        $this->toggle4 = false;
        $this->toggle3 = true;
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
