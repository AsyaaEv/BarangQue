<?php

namespace App\Livewire\Dashboard\Input\Barang;

use App\Models\Audit;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Attributes\On;

class DeleteBarang extends Component
{
    public function render()
    {

        return view('livewire.dashboard.input.barang.delete-barang');
    }
    public $jenis, $no, $id;

    #[On('delete')]
    public function updateTest($id)
    {
        $datab = Barang::find($id);
        $this->jenis = $datab->jenis;
        $this->no = $datab->no;
        $this->id = $datab->id;
    }

    public function delete($id)
    {
        $data = Barang::find($id);
        $foto = $data->foto;

        $audit = new Audit;
        $audit->nama_admin = Auth::user()->name;
        $audit->no_barang = $this->no;
        $audit->keterangan = "Menghapus";
        $audit->type = 'barang';
        
        if ($foto) {
            Storage::delete('public/' . $foto);
        }

        try {
            $data->delete();
            $audit->save();
            session()->flash('msg', __('Barang berhasil dihapus'));
            session()->flash('alert', 'success');
            return redirect('/dashboard/barang');
        } catch (\Throwable $th) {
        }
    }

    public function cancel()
    {
        $this->jenis = null;
        $this->no = null;
        $this->id = null;
    }
}
