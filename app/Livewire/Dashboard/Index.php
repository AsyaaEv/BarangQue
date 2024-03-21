<?php

namespace App\Livewire\Dashboard;

use App\Models\Barang;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $totalBarang = $this->jumlahBarang();
        $totalBarangDiam = $this->jumlahBarangDiam();
        $jumlahBarangDipinjam = $this->jumlahBarangDipinjam();
        return view('livewire.dashboard.index', compact('totalBarang', 'totalBarangDiam', 'jumlahBarangDipinjam'));
    }

    public function jumlahBarang(){
        return Barang::count();
    }
    public function jumlahBarangDiam(){
        return Barang::where('status', '0')->count();
    }
    public function jumlahBarangDipinjam(){
        return Barang::where('status', '1')->count();
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
