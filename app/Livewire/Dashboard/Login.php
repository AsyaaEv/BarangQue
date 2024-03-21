<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function render()
    {
        return view('livewire.dashboard.login');
    }

    public function save()
    {
        $user = User::where('email', $this->email)->first();
        if ($user && Hash::check($this->password, $user->password)) {
            if($user->type == 'admin'){
                Auth::login($user);
                return redirect('/dashboard');
            }else {
                dd('Login failed');
            }
        } else {
            // Authentication failed
            dd('Login failed');
        }
    }
}