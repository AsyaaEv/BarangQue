<?php

namespace App\Livewire\Dashboard;

use App\Models\Audit;
use App\Models\Barang;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $totalBarang = $this->jumlahBarang();
        $totalBarangDiam = $this->jumlahBarangDiam();
        $jumlahBarangDipinjam = $this->jumlahBarangDipinjam();
        $auditAdmin = $this->auditAdmin();
        $auditBarang = $this->auditBarang();

        $allUser = $this->getAllUser();
        $getAdmin = $this->getAdmin();
        $getUser = $this->getUser();

        return view('livewire.dashboard.index', compact('totalBarang', 'totalBarangDiam', 'jumlahBarangDipinjam', 'auditAdmin', 'auditBarang', 'allUser', 'getAdmin', 'getUser'));
    }

    public function jumlahBarang()
    {
        return Barang::count();
    }

    public function jumlahBarangDiam()
    {
        return Barang::where('status', '0')->count();
    }

    public function jumlahBarangDipinjam()
    {
        return Barang::where('status', '1')->count();
    }

    public function auditAdmin()
    {
        return Audit::where('type', 'admin')->orderBy('id', 'desc')->get();
    }

    public function auditBarang()
    {
        return Audit::where('type', 'barang')->orderBy('id', 'desc')->get();
    }

    public function getAllUser()
    {
        return User::count();
    }

    public function getAdmin()
    {
        return User::where('role', 'admin')->count();
    }

    public function getUser()
    {
        return User::where('role', 'user')->count();
    }
}
