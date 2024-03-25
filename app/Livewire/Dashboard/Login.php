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
            if($user->role == 'admin'){
                Auth::login($user);
                // $this->dispatch('login', data: $user->name);
                return redirect('/dashboard');
            }else {
               Auth::login($user);
               return redirect('/');
            }
        } else {
            session()->flash('msg', __('Email atau password salah'));
        }
    }
}