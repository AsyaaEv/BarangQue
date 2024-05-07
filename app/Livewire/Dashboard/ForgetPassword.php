<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use GuzzleHttp\Client;
use Livewire\Component;

class ForgetPassword extends Component
{
    public $noWa, $otp, $password, $password_confirmation, $otp1, $otp2, $otp3, $otp4, $otp5, $otp6;
    public $toggleOtp = false, $togglePassword = false;
    public function render()
    {
        return view('livewire.dashboard.forget-password');
    }

    public function sectionOtp()
    {

        $this->validate([
            'noWa' => 'required|numeric'
        ], [
            'noWa.required' => 'Nomor WA harus diisi.',
            'noWa.numeric' => 'Nomor WA harus berupa angka.'
        ]);

        

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
                        "message" => "*BarangQue*\n\nKode OTP Anda : *" . strval($this->otp) . "*, Jangan berikan kode otp anda kepada siapapun!\n\nGunakan kode otp ini untuk mengganti password anda dan kode otp ini hanya berlaku 1 menit."// message
                    ]
                ]
            ]);
            
        } catch (\Exception $e) {
            return;
        }

        $this->toggleOtp = true;
    }

    public function sectionPassword()
    {
        $combinedOtp = $this->otp1 . $this->otp2 . $this->otp3 . $this->otp4 . $this->otp5 . $this->otp6;
        if ($combinedOtp != $this->otp) {
            
            return;
        } 

        $this->toggleOtp = false;
        $this->togglePassword = true;

    }

    public function changePassword()
    {
        $this->validate([
            'password' => 'required|min:6|max:255',
            'password_confirmation' => 'required|min:6|max:255|same:password',
        ], [
            'password.required' => 'Password baru harus diisi.',
            'password.min' => 'Password baru harus minimal 6 karakter.',
            'password_confirmation.required' => 'Konfirmasi password harus diisi.',
            'password_confirmation.min' => 'Konfirmasi password harus minimal 6 karakter.',
            'password_confirmation.same' => 'Konfirmasi password tidak cocok dengan password baru.',
        ]);

        $data = User::where('no_wa', $this->noWa)->first();
        $data->password = $this->password;
        $data->update();
        return redirect('login');
    }
}
