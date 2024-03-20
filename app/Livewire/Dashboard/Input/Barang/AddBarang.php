<?php

namespace App\Livewire\Dashboard\Input\Barang;

use App\Models\Barang;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddBarang extends Component
{
    public $jenis, $no, $nama, $foto;
    use WithFileUploads;
    public function render()
    {
        return view('livewire.dashboard.input.barang.add-barang');
    }

    public function insert(){

        $post = new Barang;
        $post->jenis = $this->jenis;
        $post->no = $this->no; 
        $post->nama = $this->nama; 
        $post->status = "0";

        if($this->foto){
            $data = $this->foto->store('src/img/barang', 'public');
            $post->foto = $data;
        }

        try{
            $post->save();
            session()->flash('msg', __('Barang berhasil ditambahkan'));
            session()->flash('alert', 'success');
            return redirect('/dashboard/barang');
        } catch (\Throwable $th) {

        }
    }

    public function resetData(){
        $this->jenis = null;
        $this->no = null;
        $this->nama = null;
    }
}
