<?php

namespace App\Livewire\Dashboard\Input\Barang;

use App\Models\Audit;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditBarang extends Component
{
    use WithFileUploads;

    public function render()
    {
        return view('livewire.dashboard.input.barang.edit-barang');
    }

    public $jenis;

    public $no;

    public $nama;

    public $status;

    public $foto;

    public $fotoold;

    public $fotoNew;

    #[On('edit')]
    public function updateEdit($id)
    {
        $data = Barang::find($id);
        $this->jenis = $data->jenis;
        $this->no = $data->no;
        $this->nama = $data->nama;
        $this->status = $data->status;
        $this->foto = $data->foto;
        $this->fotoold = $data->foto;
    }

    public function update()
    {
        // dd($this->status);
        $data = Barang::where('no', $this->no)->first();
        // dd($data);
        $data->jenis = $this->jenis;
        $data->nama = $this->nama;
        $data->status = $this->status;

        $audit = new Audit;
        $audit->nama_admin = Auth::user()->name;
        $audit->no_barang = $this->no;
        $audit->keterangan = 'Mengubah';
        $audit->type = 'barang';

        if ($this->fotoNew) {
            Storage::delete('public/'.$this->foto);
            $foto = $this->fotoNew->store('src/img/barang', 'public');
            $data->foto = $foto;
        } else {
            $data->foto = $this->foto;
        }

        try {
            $data->update();
            $audit->save();
            session()->flash('msg', __('Barang berhasil diedit'));
            session()->flash('alert', 'success');

            return redirect('/dashboard/barang');
        } catch (\Throwable $th) {
            session()->flash('msg', __('Barang gagal diedit'.$th));
            session()->flash('alert', 'success');
        }
    }

    public function resetData()
    {
        $this->jenis = null;
        $this->no = null;
        $this->nama = null;
        $this->fotoNew = null;
        $this->status = null;
    }
}
