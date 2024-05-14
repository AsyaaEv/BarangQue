<?php

namespace App\Livewire\View\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditPassword extends Component
{
    public function render()
    {
        return view('livewire.view.profile.edit-password');
    }

    public $passwordNew;

    public $cPasswordNew;

    public $errorM1;

    public $errorM2;

    public function updatePasswordValidation()
    {
        if (strlen($this->passwordNew) <= 8) {
            $this->errorM1 = 'Password harus lebih dari 8 karakter';
        } else {
            $this->errorM1 = null;
        }

        if ($this->passwordNew !== $this->cPasswordNew) {
            $this->errorM2 = 'Konfirmasi password tidak cocok';
        } else {
            $this->errorM2 = null;
        }
    }

    public function editPassword()
    {
        if ($this->errorM1 || $this->errorM2) {
            return;
        }

        $data = User::find(Auth::user()->id);
        $data->password = $this->passwordNew;

        try {
            $data->update();
            session()->flash('alert', 'Password berhasil diubah');

            return redirect('/profile');
        } catch (\Throwable $th) {

        }
    }
}
